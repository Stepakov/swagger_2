<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Create One Post",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string", example="Post 1"),
 *                     @OA\Property(property="likes", type="integer", example=1),
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Post 1"),
 *                 @OA\Property(property="likes", type="integer", example=1)
 *             ),
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Get All Posts",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Post 1"),
 *                 @OA\Property(property="likes", type="integer", example=1)
 *             ))
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Get One Post",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         description="Post's ID",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1,
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Post 1"),
 *                  @OA\Property(property="likes", type="integer", example=1)
 *              ),
 *          )
 *      )
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Update One Post",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         description="Post's ID",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1,
 *     ),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string", example="Post 1 updated"),
 *                     @OA\Property(property="likes", type="integer", example=11),
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Post 1"),
 *                  @OA\Property(property="likes", type="integer", example=1)
 *              ),
 *          )
 *      )
 * ),
 *
 *@OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Delete One Post",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         description="Post's ID",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1,
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done"),
 *          )
 *      )
 * ),
 *
 *
 */
class PostsController extends Controller
{
    //
}
