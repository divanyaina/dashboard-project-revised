<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class MetabaseController extends Controller
{
    public function home(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 52],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('home', $data);

    }

    public function dashboard_vpp_bawean(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 18],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('vpp-bawean', $data);

    }

    public function dashboard_balaidesa(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 15],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('balaidesa-bawean', $data);

    }

    public function dashboard_pesantren(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 16],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('pesantren-bawean', $data);

    }

    public function dashboard_masjidalkautsar(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 17],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('masjidalkautsar-bawean', $data);

    }

    public function dashboard_vpp_its(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 9],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('vpp-its', $data);

    }

    public function dashboard_der1_its(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 19],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('der1-its', $data);

    }

    public function dashboard_der2_its(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 20],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('der2-its', $data);

    }

    public function dashboard_der3_its(){
        $metabaseSiteUrl = env('api.Metabase');
        $metabaseSecretKey = env('api.Key.Metabase');
        $payload = [
            'resource' => ['dashboard' => 51],
            'params' => (object)[],
            'exp' => time() + (10 * 60)
        ];
        $token = JWT::encode($payload, $metabaseSecretKey, 'HS256');
        $iframeUrl = "$metabaseSiteUrl/embed/dashboard/$token#theme=transparent&bordered=false&titled=false";
        $data = [
            'url' => $iframeUrl
        ];

        return view('der3-its', $data);

    }

}
