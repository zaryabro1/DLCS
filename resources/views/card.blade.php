<!doctype html>
<html lang='en'>
<head>
    <!--

    oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo

    ᴄᴀʀᴇғᴜʟʟʏ ᴄʀᴀғᴛᴇᴅ ʙʏ ʀᴏʙᴇʀᴛ ʀᴏss, ᴛʜɪʀᴅ ᴏғ ʜɪs ɴᴀᴍᴇ
    ɪɴ ᴛʜᴇ ʏᴇᴀʀ ᴛᴡᴏ-ᴛʜᴏᴜsᴀɴᴅ ᴀɴᴅ ᴛᴡᴇɴᴛʏ-ᴏɴᴇ

    sᴀʟᴜᴛᴀᴛɪᴏɴs ғʀᴏᴍ ᴛʜᴇ ғɪɴɢᴇʀ ʟᴀᴋᴇs
    ɪғ ʏᴏᴜ ᴋɴᴏᴡ ʏᴏᴜ ᴋɴᴏᴡ
    sᴇᴇ ʏᴏᴜ ᴏɴ ᴛʜᴇ ᴏᴛʜᴇʀ sɪᴅᴇ

    oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo.oO0Oo

    -->
    <meta charset='utf-8'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='viewport' content='width=device-width, initial-scale=1, viewport-fit=cover'>
    <title>Delicious Calling Card</title>
    <meta name='description' content='DLCS'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    {{ URL::asset('fonts/fonts.css') }}
    <link rel='stylesheet' href="{{ URL::asset('fonts/fonts.css') }}<?php /* echo time(); */ ?>"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' href="{{ asset('css/normalize.css') }}" />
    {{ asset('js/vendor/Coloris-main/dist/coloris.min.css') }}
    <link rel='stylesheet' href="{{ asset('js/vendor/Coloris-main/dist/coloris.min.css') }}"/>

    <link rel='stylesheet' href="{{ asset('css/common.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src='./js/vendor/zepto.min.js'></script> -->
    <script src="{{ asset('js/mobile-check.js') }}"></script>
    <script src="{{ asset('js/vendor/Coloris-main/dist/coloris.min.js') }}"></script>
    <script src="{{ asset('js/vendor/tinycolor-min.js') }}"></script>

    <style>
        body.preload {
            opacity: 0;
        }
    </style>

</head> 
<!-- here is where you change the fonts  {{$User_profile->font}}-->
<body class='preload dark'>
   
<?php  include_once('inc/body-header.php')  ?>
    
    <!-- Content -->
    <div class='fixed-bg'></div>
    <div class='canvas'>
        <div class='wrapper'>
            <div class='head'>
                <div class='front-head'>
                    <div class='avatar'></div>
                    
                    <span id="name" class='user-spokenname editable'>{{ $User_profile->name }}</span>
                    <span id="residence" class='user-username editable'>{{$User_profile->residence}}</span>
                    <p id="description" class='bio editable'>{{$User_profile->description}}</p>
                    @if ($editable)
                        <button class="editable" onclick="save_data()">Save</button>
                    @endif
                    <div class='social-bar'>
                        <a class='ig' href='https://instagram.com' target='_blank'>
    <?php  include_once('img/common/ig.php')  ?>
                        </a>
                        <a class='fb' href='https://facebook.com' target='_blank'>
    <?php  include_once('img/common/fb.php')  ?>
                        </a>
                        <a class='tw' href='https://twitter.com' target='_blank'>
    <?php  include_once('img/common/tw.php')  ?>
                        </a>
                        <a class='li' href='https://linkedin.com' target='_blank'>
    <?php  include_once('img/common/li.php')  ?>
                        </a>
                        <a class='li' href='https://maps.google.com' target='_blank'>
    <?php  include_once('img/common/location.php')  ?>
                        </a>
                    </div>
                    @if ($editable)
                        <p id="description" class='bio'>(Please save after making changes)</p>
                    @endif    
                </div>
                <div class='edit-head'>
                    <span class='edit-title'>Edit Mode</span>
                </div>
                <div class='theme-head'>
                    <span class='theme-title'>Customize Theme</span>
                    <div class='theme-head-inner'>
                        <div class='theme-head-row'>
                            <span class='theme-subtitle'>Gradient</span>
                            <div class='color-fields-wrapper'>
                                <input type="text" class='coloris coloris-1' id="gradient_one" data-coloris value="{{$User_profile->gradient_one}}" /><!-- 
                             --><input type="text" class='coloris coloris-2' id="gradient_two" data-coloris value="{{$User_profile->gradient_two}}" />
                            </div>
                        </div>
                        <div class='theme-head-row'>
                            <span class='theme-subtitle'>Title</span>
                        </div>
                    </div>
                    <span class='user-spokenname'>{{ $User_profile->name }}</span>
                    <div class='theme-head-inner'>
                        <div class='theme-head-row'>
                            <select name='title-font' value="{{$User_profile->font}}" id='title-font'>
                                <option disabled='' >Typeface</option>
                                <option value='title-font-1' {{$User_profile->font == 'title-font-1'  ? 'selected' : ''}}>Lazer 84</option>
                                <option value='title-font-2' {{$User_profile->font == 'title-font-2'  ? 'selected' : ''}}>Summer 85</option>
                                <option value='title-font-3' {{$User_profile->font == 'title-font-3'  ? 'selected' : ''}}>CAC Pinafore</option>
                                <option value='title-font-4' {{$User_profile->font == 'title-font-4'  ? 'selected' : ''}}>A Dripping Marker</option>
                                <option value='title-font-5' {{$User_profile->font == 'title-font-5'  ? 'selected' : ''}}>Fair Prosper</option>
                                <option value='title-font-6' {{$User_profile->font == 'title-font-6'  ? 'selected' : ''}}>GreatVibes-Regular</option>
                                <option value='title-font-7' {{$User_profile->font == 'title-font-7'  ? 'selected' : ''}}>VCROSDMono</option>
                                <option value='title-font-8' {{$User_profile->font == 'title-font-8'  ? 'selected' : ''}}>Roboto Regular</option>
                                <option value='title-font-9' {{$User_profile->font == 'title-font-9'  ? 'selected' : ''}}>Roboto Bold</option>
                                <option value='title-font-10' {{$User_profile->font == 'title-font-10'  ? 'selected' : ''}}>Roboto Black</option>
                                <option value='title-font-11' {{$User_profile->font == 'title-font-11'  ? 'selected' : ''}}>Yantramanav-Medium</option>
                                <option value='title-font-12' {{$User_profile->font == 'title-font-12'  ? 'selected' : ''}}>Yantramanav-Bold</option>
                                <option value='title-font-13' {{$User_profile->font == 'title-font-13'  ? 'selected' : ''}}>Yantramanav-Black</option>
                            </select>
                            <div class='color-fields-wrapper'>
                                <!-- <input type="text" class='coloris coloris-3' data-coloris value="#ffffff" /> --><!-- 
                             --><!-- <input type="text" class='coloris coloris-4' data-coloris value="#d43f8d" /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.head -->
            <div class='main'>
            @if ($editable)
                <h2>Add Link</h2>
                <form method="POST" action="{{action('App\Http\Controllers\UserController@addLink')}}" enctype="multipart/form-data" style="margin-top:10px; margin-bottom:10px">
                    {{csrf_field()}}
                    <input name="LinkName" placeholder="Link Name" required/>
                    <input name="FirstLetter" placeholder="First Letter" required/>
                    <input name="Description" placeholder="Description" required/>
                    <input name="Url" placeholder="Url" required/>
                    <button type="submit" style="margin-top:5px">Add Link</button>
                </form>
            @endif

            @include('section-links')
            
            
            @include('section-galleryz')
            


            @if ($editable)
                <form method="POST" action="{{action('App\Http\Controllers\UserController@uploadFile')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="file" id="fileForUpload"/>
                    <button type="submit" id="upload-button" class="btn btn-primary">Upload Image</button>
                </form>
            @endif

            </div><!-- /.main -->
            <div class='footer'>
                <div class='footer-inner'>
                    <span class='footer-attrib'>&copy;2020-<?php /* echo date("Y"); */ ?> Delicious LLC.</span>
                    <div class='breaker'></div>
                    <a class='footer-cta' href='https://dlcs.cc' target='_blank'>
                        <span>Get YOUR Free Calling Card</span>
                        <div class='link-underbar'></div>
                        <div class='link-underbar-2'></div>
                    </a>
                </div>
            </div><!-- /.footer -->

            @if ($editable)

                <?php  include_once('inc/menu.php')  ?>

            @endif
    

        </div><!-- /.wrapper -->
    </div><!-- /.canvas -->
    <div class='takeover'>
        <img class='gal-img-of' src='./img/720-7.jpg' alt='' />
        <div class='close takeover-close'>
            <div class='close-line'></div>
            <div class='close-line'></div>
        </div>
    </div>
    <div class='viewport-border'></div>
    <div class='page-curtain'></div>
    
    <?php  include_once('inc/debug.php')  ?>

    
    <!-- /Content -->
    <script src="{{ asset('js/card-logic.js') }}"></script>
    <script>
        var fontClassName;
        $(document).ready(function(){
            var selectedClass = document.getElementById('title-font');
            fontClassName = selectedClass.options[selectedClass.selectedIndex].value;
            document.body.classList.add(fontClassName);
            
            if( document.getElementById("fileForUpload").files.length == 0 ){
                $("#upload-button").hide();
            } else {
                $("#upload-button").show(200);
            }
        });

 
        $('#fileForUpload').on('change', function() {
            if( document.getElementById("fileForUpload").files.length == 0 ){
                $("#upload-button").hide();
            } else {
                $("#upload-button").show(200);
            }
        });
 
    
           
        $('#title-font').on('change', function() {
            document.body.classList.remove(fontClassName);
            fontClassName = this.value;
            document.body.classList.add(fontClassName);
        });
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        function save_data(){
            var name = document.getElementById('name').innerHTML;
            var residence = document.getElementById('residence').innerHTML;
            var description = document.getElementById('description').innerHTML;
            var gradient_two = document.getElementById('gradient_two').value;
            var gradient_one = document.getElementById('gradient_one').value;
            var font = document.getElementById('title-font').value;
            var links_list = function () {
                var order = []
                var list = $("#links_list > div");
                for(let i = 0; i < list.length; i++) 
                    order.push(list[i].dataset.id);
                return order;
            }();

            console.log("save_data called with: " + name);
            jQuery.ajax({
                url:'/save',
                type:'post',
                data:{name:name, id:{{$User_profile->user_id}}, description:description, residence:residence, gradient_one:gradient_one, gradient_two:gradient_two, links_list:links_list, font:font},
                success:function(){
                    alert("Changes Saved");
                }
            })
        }
    </script>

    <?php  include_once('lr/livereload.php')  ?>

</body>
</html>