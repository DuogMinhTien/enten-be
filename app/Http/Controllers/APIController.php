<?php
namespace App\Http\Controllers;

class APIController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/v1/visitor/logout",
     *     description="Logout",
     *     security = { { "bearerAuth": {} } },
     *     tags={"authentication"},
     *     @SWG\Response(
     *         response=200,
     *         description="OK",
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized",
     *     ),
     * )
     */

}