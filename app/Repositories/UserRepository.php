<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\User_profile;
use App\Models\File;
use App\Models\Link;
use Illuminate\Http\Request;
use Exception;


class UserRepository
{
    public function getAllUsers(){
        return User::all();
    }

    public function getUserProfile($id){
        return  User_profile::with('Links', 'Files')->where('user_id', $id)->first();
    }

    public function updateUserProfile(Request $request){
        User_profile::where("user_id", $request->id)
        ->update([
            "name" => $request->name,
            "description" => $request->description,
            "residence" => $request->residence,
            "gradient_one" => $request->gradient_one,
            "gradient_two" => $request->gradient_two,
            "font" => $request->font
        ]);

        $links = $request->links_list;

        for ($i = 0; $i < count($links); $i++){
            Link::where("id", $links[$i])
            ->update([
                "position" => $i+1
            ]);
        }
    }

    public function uploadFileInfo(Request $req, $fileName, $id){
        $file_info = new File;
        $file_info->file_name = $fileName;
        $file_info->user_id = $id;
        $file_info->file_path = "storage/";
        $file_info->save();
    }

    public function addLinkInfo(Request $req, $linksCount, $id){
        $link = new Link;
        $link->user_id = $id;
        $link->url = $req->Url;
        $link->name = $req->LinkName;
        $link->first_letter = $req->FirstLetter;
        $link->description = $req->Description;
        $link->position = $linksCount + 1;
        $link->save();
    }

    public function getUserIdByUserName($username){
        try {
            return User::where('user_name', $username)->first()->id;
        } catch (Exception $ex){
            return false;
        }
    }
}

