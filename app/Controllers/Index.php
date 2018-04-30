<?php
namespace app\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Lib\Log;
use Monolog\Logger;

class Index {

    public function index()
    {
        Log::write('index  index is excute ', Logger::INFO);

        $request = new Request(
            $_GET,
            $_POST,
            array(),
            $_COOKIE,
            $_FILES,
            $_SERVER
        );
        var_dump($request->getContentType());
        exit;
        Log::write('index is excute ', Logger::WARNING);

        $response = new Response();
        $response->setContent(json_encode(array(
            'data' => 123,
        )));
        $response->headers->set('Content-Type', 'application/json');
        $response->send();

    }

    public function page()
    {   
        Log::write('index  page is excute ', Logger::INFO);
        echo 'page';
    }

    public function view($id)
    {
        echo $id;
    }

}