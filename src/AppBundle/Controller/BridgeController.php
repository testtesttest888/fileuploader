<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 05.06.17
 * Time: 13:52
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BridgeController extends Controller
{
    public function listAction(Request $request)
    {
        $requestData = json_decode($request->getContent(), true);

        $data = ['result' => []];

        if (array_key_exists('path', $requestData) && '/S3' == $requestData['path']) {
            try {
                $s3Files = $this->get('reader.filesystem.s3')->ls();
            } catch (\Exception $e) {
                $this->get('logger')->error('Error retrieving data from S3');

                return new JsonResponse($data);
            }
            foreach ($s3Files as $s3File) {
                $data['result'][] = [
                    "name" => $s3File,
                    "rights" =>  "drwxr-xr-x",
                    "size" => "4096",
                    "date" => "2017-01-01 00:00:01",
                    "type" => "file"
                ];
            }
        }

        if (array_key_exists('path', $requestData) && '/' == $requestData['path']) {

            $data = [
                'result' => [
                    [
                        "name" => "S3",
                        "rights" => "drwxr-xr-x",
                        "size" => "4096",
                        "date" => "2016-03-03 15:31:40",
                        "type" => "dir"
                    ],
                    [
                        "name" => "Dropbox",
                        "rights" => "drwxr-xr-x",
                        "size" => "4096",
                        "date" => "2016-03-03 15:31:40",
                        "type" => "dir"
                    ],
                    [
                        "name" => "Google Drive",
                        "rights" => "drwxr-xr-x",
                        "size" => "4096",
                        "date" => "2016-03-03 15:31:40",
                        "type" => "dir"
                    ],

                ]
            ];
        }

        return new JsonResponse($data);
    }

    public function uploadAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function renameAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function copyAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function moveAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function removeAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function editAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function getContentAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function createFolderAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function downloadFileAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function downloadMultipleAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function compressAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function extractAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }

    public function permissionsAction(Request $request)
    {
        $data = [];

        return new JsonResponse($data);
    }
}
