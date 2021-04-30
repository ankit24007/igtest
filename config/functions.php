<?php

function dd($data) {
    echo "<pre>"; print_r($data); exit;
}

function get_uri()
{
    return trim(str_replace(config['base_dir'],'', $_SERVER['REQUEST_URI']), '/');
}

function cleanpath($file)
{
    if(strpos($file, '?') > 0){
        return substr($file, 0, strpos($file, '?'));
    }

    return $file;
}

function get_file()
{
    $dir = dirname(__DIR__, 1);
    $file = cleanpath($dir.'/'.config['api_dir'].'/'.get_uri());
    return $file.'.php';
}

function response($data, $code)
{
    $response = [];

    if($code == 200){
        $response['status'] = 'success';
        $response['data'] = $data;
    
    } else if($code == 400 || $code = 500){
        $response['status'] = 'failed';
        $response['message'] = $data;
    }

    echo json_encode($response);
    exit;
}