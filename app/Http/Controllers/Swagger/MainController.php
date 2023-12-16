<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *     title="My Doc For API",
 *     version="1.0.1"
 * ),
 * @OA\PathItem(
 *     path="/api"
 * ),
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer"
 * )
 */
class MainController extends Controller
{
    //
}
