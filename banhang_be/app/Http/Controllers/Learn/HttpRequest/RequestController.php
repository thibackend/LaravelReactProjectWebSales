<?php

namespace App\Http\Controllers\Learn\HttpRequest;

use App\Http\Controllers\Controller;
// use App\Http\Requests\fileUpLoadRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function getForm(Request $request)
    {
        // ---------------------- Request -> all() --------------------------------------------
        // dd($request->all());
        // if (!empty($request->all())) :
        //     $id = $request->all()['id'];
        // endif;
        // return view('Learn.HttpRequest.request', !empty($request->all()) ? compact(['id']) : []);
        // ------------------------------------------------------------------------------------------


        // ----------------------------- $request ->path()--------------------------------------------------------

        // $path = $request->path();
        // dd($path);
        // với path() method sẽ chỉ lấy đường link hiện tại và không nhận bất cứ biến nào sau dấu ? ví dụ
        // localhost:8000/category ? id=1;
        // với vd này thì chỉ lấy category;
        // ________________________________________________________________________________________


        // ---------------------------------------- ->is() method -------------------------------------
        // echo  $request->is('getRequest') ? "path is : getRequest" :  "this route is not getRequest";
        // ->is dùng để so sánh điều kiện logic có đúng không nếu đúng thì sẽ thực hiện làm gì đó...theo ý muốn.

        // _______________________________________________________________________________________________



        // ---------------------------------------- ->url() method -------------------------------------
        // echo 'url(): ' . $request->url();
        // ->url() method sẽ in đầy đủ  url cả http cả ip và route của mình luôn 
        // như này: http://localhost:8000/getRequest
        // và nó sẽ không in ra những thứ sau dấu chấm hỏi  ?id = 1 ... 


        // echo "<br> <br>";
        // // để lấy luôn cả biến sau ? ta dùng fullurl();
        // echo 'fullUrl():' . $request->fullUrl();

        // url trên browser: http://localhost:8000/getRequest?name=thihandsome

        // url(): http://localhost:8000/getRequest

        // fullUrl():http://localhost:8000/getRequest?name=thihandsome
        // _______________________________________________________________________________________________


        // ---------------------------------------- ->method() method -------------------------------------

        // echo $request->method();
        // dùng để hiễn thị phương thức mình đẩy lên vd: get post delete put patch...


        // và có một method thường để trong điều kiện là isMethod();

        // if ($request->isMethod('GET')) {
        //     echo 'Method là :' . $request->method();
        // }


        // _______________________________________________________________________________________________


        // ---------------------------------------- ->ip() method -------------------------------------

        // echo 'địa chỉ IP là :'. $request->ip();


        // hàm ->ip() dùng để lấy địa chỉ id ví dụ như ta có đia chỉ ip của local host là :
        // 127.0.0.1 ...
        // _______________________________________________________________________________________________





        // ---------------------------------------- ->server() method -------------------------------------

        // dd($request->server());
        // cái này cũng giống như ta in 
        //  dd($_SERVER); // trong php thuần. và nội dung cũng nhiều hơn.

        // dis play ra những thông tin server 
        // vd:
        //  "REMOTE_PORT" => "52353"
        //   "SERVER_SOFTWARE" => "PHP 8.2.6 Development Server"
        //   "SERVER_PROTOCOL" => "HTTP/1.1"
        //   "SERVER_NAME" => "127.0.0.1"
        //   "SERVER_PORT" => "8000"
        //   "REQUEST_URI" => "/getRequest?name=thihandsome"
        //   "REQUEST_METHOD" => "GET"
        //   "SCRIPT_NAME" => "/index.php"
        //   "SCRIPT_FILENAME" => "D:\SapotaIntern\SelfProjectLaravelAPI\banhang_be\public\index.php"
        //   "PATH_INFO" => "/getRequest"
        //   "PHP_SELF" => "/index.php/getRequest"
        //   "QUERY_STRING" => "name=thihandsome"
        //   "HTTP_HOST" => "localhost:8000"
        //   "HTTP_CONNECTION" => "keep-alive"
        //   "HTTP_CACHE_CONTROL" => "max-age=0"
        //   "HTTP_SEC_CH_UA" => ""Not.A/Brand";v="8", "Chromium";v="114", "Google Chrome";v="114""
        //   "HTTP_SEC_CH_UA_MOBILE" => "?0"
        //   "HTTP_SEC_CH_UA_PLATFORM" => ""Windows""
        // _______________________________________________________________________________________________



        // ---------------------------------------- ->header() method -------------------------------------
        // dd($request->header());

        // lệnh ->header() sẽ truy cập vào thông tất cả thông tin có trong headers.
        //#headers: array:16 [▼
        //     "host" => array:1 [▼
        //       0 => "localhost:8000"
        //     ]
        //     "connection" => array:1 [▼
        //       0 => "keep-alive"
        //     ]
        //     "cache-control" => array:1 [▶]
        //     "sec-ch-ua" => array:1 [▶]
        //     "sec-ch-ua-mobile" => array:1 [▶]
        //     "sec-ch-ua-platform" => array:1 [▶]
        //     "upgrade-insecure-requests" => array:1 [▶]
        //     "user-agent" => array:1 [▶]
        //     "accept" => array:1 [▶]
        //     "sec-fetch-site" => array:1 [▶]
        //     "sec-fetch-mode" => array:1 [▶]
        //     "sec-fetch-user" => array:1 [▶]
        //     "sec-fetch-dest" => array:1 [▶]
        //     "accept-encoding" => array:1 [▶]
        //     "accept-language" => array:1 [▶]
        //     "cookie" => array:1 [▶]
        //   ]

        // echo "----------------------------------------br";
        // dd($request); // trong request thì sẽ có rất nhiều thông tin và trong đó có headers 
        // lện ->header() sẽ lấy thông tin trong header đó và chúng ta có thể truy cập vào trong các biến header đó
        // ví dụ: $request->header()['host'];

        // ---------- CÁCH VIẾT 1
        // dd($request->header()['host']);
        // _____________________


        // --------------------------- CÁCH VIẾT 2
        // $user_agent = $request->header('user_agent');
        // dd($user_agent);

        // RESULT: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36" // app\Http\Controllers\Learn\HttpRequest\RequestController.php:133
        // ______________________________





        // ___________________________________ ____________________________________________________________


        // ---------------------------------------- ->input() method -------------------------------------
        // echo $request->input();
        // dd($request->input('name'));
        // hàm này dùng để lấy nội dung trên thanh request có truyền là name hoặc id.



        // ________________________________________________________________________________________________

        // dd(request('name','giá trị name khong tồn tại'));
        // dd(old('id'));

        $old = old('userName');
        return view('Learn.HttpRequest.request', compact('old'));
    }
    public function NewPost(Request $request)
    {
        //  ------------------------------ request-> all() ---------------------------------------------------
        // request->all() sữ dụng để lấy tất cả các request được gửi lên trên thông qua phương thức post hoặc get
        // $user = $request->all()['userName'];
        // $content = $request->all()['content'];

        // --------------------------------------------------------------------------------


        // ----------------------------- $request ->path()-----------------------------------------------------

        // $path = $request->path();
        // dd($path);
        // ________________________________________________________________________________________

        // -------------------------------- $request ->query()---------------------------------
        // $data = $request->query();
        // dd($data);
        // ____________________________________________ hàm này chỉ lấy query string trên thanh url ------------

        // ------------------------------------------ $request ->has() -----------------------------------------
        //  - hàm này dùng để check các biến truyền vào trên ô url có tồn tại hay không?

        // $has = $request->has('userName');
        // if ($has) {
        //     $request->flash();   // ta phải có flash() thì ta mới khởi tạo old data được.
        //     // set old value.---------------------------------------------------------------
        // }
        // return redirect(route('request'));
        // return view('Learn.HttpRequest.newPost', compact(['user', 'content']));
    }

    public function fileUpLoad(Request $request)
    {
        if ($request->photo) {
            $fileName = $request->file('photo')->getClientOriginalName();
            $request->photo->storeAs('profile', $fileName);
            return view('Learn.HttpRequest.fileUpLoad');
        } else {
            $err = 'there have no items  in photo';
            return view('Learn.HttpRequest.fileUpLoad', compact(['err']));
        }
    }
}
