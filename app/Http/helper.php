<?php

// active link

if (!function_exists('setActive')) {
    function setActive($path, $active = 'active')
    {
        return call_user_func_array('Request::is', (array) $path) ? $active : '';
    }
}

// the request shurthund of admin resource
if (!function_exists('adminUrl')) {
    function adminUrl($url = null)
    {
        return url('/admin/' . $url);

    }
}



// get the segment of request and user in the navigation bar to open the li activated

if (!function_exists("active_menu")) {
    function active_menu($link)
    {

        if (preg_match("/" . $link . "/i", request()->segment(2))) {
            return ["active", "display:block"];
        } else {
            return ["", ""];
        }
    }
}

if (!function_exists("active_dashboard_item")) { //this function for active dashboard link in the navigation bar its a link not has a item
    function active_dashboard_item($link)
    {
        if (preg_match('/' . $link . '/i', request()->segment(0)) && request()->segment(1) == "") {
            return ["active"];
        } else {
            return [""];
        }
    }
}


// set the messages to session ---------------------------------------------
if (!function_exists("set_messages")) {
    function set_messages()
    {
        $messages = \DB::table("Contact")->where('status', '0')->orderBy('id', 'desc')->get();
        $count = count($messages);

        if (!is_null($messages)) {
            session()->push('messages', [$messages, $count]);
        } else {
            session()->forget('messages');
            session()->push('messages', [[], 0]);
        }

    }
}

// update the messages information
if (!function_exists("update_messages")) {
    function update_messages()
    {
        if (session()->has('messages')) { // check if the has session messages
            session()->forget('messages'); // delete the old session messages
        }

        set_messages(); // set the new messages session
    }
}

// get the messages from session
if (!function_exists("messages")) {
    function messages()
    {
        return session()->get('messages')[0];

    }
}

// function status messages list
if(!function_exists('msg_status')){
     function msg_status()
    {
        return [
            '0'=>"غير مقروئة",
            "1"=>'مقروئة'
        ];
    }
}


// -------------------------------------------------------------------------

// start helper function to the uploaded files conneted with the upload class
if (!function_exists('upload')) {
    function upload()
    {
        return new App\Http\Controllers\upload;
    }
}
// end helper function to the uploaded files

// start our validation rules ------------------
if (!function_exists('validate_image')) { // validate image rule
    function validate_image($extension = null)
    {
        if (!is_null($extension)) {
            return 'image|mimes:' . $extension;
        } else {
            return "image|mimes:jpg,jpeg,gif,png";
        }

    }
}
// end our validation rules ------------------

// ----------------------------------------------------------------------------------------


if (!function_exists('status')) {
    function status()
    {
        return [
            '1' => 'مفعل',
            '0' => 'مقفل',
        ];
    }
}




// retunr image with path
if (!function_exists('image_path')) {
    function image_path($src, $default = 'images/articles/default.png')
    {
        $path = '';

        $image_path = public_path($src);

        if(file_exists($image_path)){
            $path = Storage::url(str_replace('storage/','',$src));
        }else{
            $path = Storage::url($default);
        }

        return $path;
    }
}


// special date format d-m-y
if (!function_exists('created')) {
    function created($date)
    {
        return \Carbon\Carbon::parse($date)->format('d-m-Y');
    }
}

// special date format منذ 15دقيقة
if (!function_exists('date_str')) {
    function date_str($date)
    {
        // return $date;
        \Carbon\Carbon::setlocale('ar');
        return Carbon\Carbon::parse($date)->diffForHumans();
    }
}
