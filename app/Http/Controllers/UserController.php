<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_Profile;
use App\Models\File;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private  $userRepository;

    //constructor
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * This function is used to register user
     * @* @param Request $request
     * @* @return redirect
     * @* @return view
     */
    public function registerUser(Request $request){
        try {
            $user = new User;
            $user->email = $request->email;
            $user->user_name = $request->username;
            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->save();
        } catch (Exception $ex) {
            if ($ex->getCode() == 23000) {
                $registerFailed = true;
                return view('register', ['registerFailed' => $registerFailed]);
            }
        }
        

        $user_profile = new User_Profile;
        $user_profile->user_id = $user->id;
        $user_profile->name = $user->name;
        $user_profile->residence = "FOUNDER, KITTYLANDs";
        $user_profile->description = "Just a quiet fella who keeps to myself and likes takin care of my kitties. Love rockin out and playin space with the boys. Randy and Lahey can frig off.";
        $user_profile->gradient_one = "#D43F8D";
        $user_profile->gradient_two = "#0250C5";
        $user_profile->font = "Typeface";
        $user_profile->save();

        return redirect(route('index'));
    }

    /**
     * This function is used to login user
     * @* @param Request $request
     * @* @return redirect
     * @* @return string
     */
    public function loginUser(Request $request){
        $loginFailed = false;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect(route('Home'));
        } 
        $loginFailed = true;
        return view('login', ['loginFailed' => $loginFailed]);
        
    }

    /**
     * This function is used to get logged in user's details
     * @* @return Auth user
     */
    public function loggedInUserDetail(){
        return Auth::user();
    }

    /**
     * This function is used to check that if a user is logged in or not
     * @* @return bool user
     */
    public function isUserLoggedIn(){
        return Auth::check();
    }

    /**
     * This function is used to logout user
     * @* @return redirect route('Login')
     */
    public function logoutUser(){
        Auth::logout();
        return redirect(route('Login'));
    }

    /**
     * This function is used to show the logged in user's home page
     * @* @return view ('card')
     */
    public function showHomePage(){
        if ($this->isUserLoggedIn()){
            $user = $this->loggedInUserDetail();
            $User_Profile = $this->userRepository->getUserProfile($user->id);
            $files = $this->userRepository->getUserProfile($user->id)->files;
            $links = $this->userRepository->getUserProfile($user->id)->links;
            
            return view('card', ['User_Profile' => $User_Profile, 'editable' => true, 'files' => $files, 'links' => $links]);
        } else {
            return redirect(route('Login'));
        }
        
    }

     /**
     * This function is used to save the changes made by the logged in user
     * @* @param Request $request
     */
    public function saveInformation(Request $request){
        $this->userRepository->updateUserProfile($request);        
    }

     /**
     * This function is used to show different user pages based on username
     * @* @param $username
     * @* @return view
     * @* @return redirect
     */
    public function showUserPage($username){
        if($this->isUserLoggedIn() && $this->loggedInUserDetail()->user_name == $username) {
            return redirect(route('Home'));
        } else {
            $userid = $this->userRepository->getUserIdByUserName($username);
            if (!$userid){
                return view("Error");
            }
            $User_Profile = $this->userRepository->getUserProfile($userid);
            $files = $this->userRepository->getUserProfile($userid)->files;
            $links = $this->userRepository->getUserProfile($userid)->links;
        
            return view('card', ['User_Profile' => $User_Profile, 'editable' => false, 'files' => $files, 'links' => $links]);
        }
    }

     /**
     * This function is used to upload images
     * @* @param Request $req
     * @* @return redirect(route('Home'))
     */
    public function uploadFile(Request $req){
        $fileName = time().'.'.$req->file('file')->extension();  
        $req->file('file')->storeAs('public', $fileName);
        $id = $this->loggedInUserDetail()->id;
        $this->userRepository->uploadFileInfo($req, $fileName, $id);     

        return redirect(route('Home'));
    }

     /**
     * This function is used to add links
     * @* @param Request $req
     * @* @return redirect(route('Home'))
     */
    public function addLink(Request $req){
        $linksCount = Link::count();
        $id = $this->loggedInUserDetail()->id;
        $this->userRepository->addLinkInfo($req, $linksCount, $id);

        return redirect(route('Home'));
    }

    //testing
    public function test(){
        // return User::with('user_profile')->find(13)->link;
        // return User_Profile::where('user_id', 13)->first();
        return User::where('id', 13)->first()->user_profile->links;
        // return  User_Profile::with('Links', 'Files')->where('user_id', 13)->first();

    }
}
