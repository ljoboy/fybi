<?php
/**
 * FILE AssetHistoryApiController.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 4:22 PM
 *
 * namespace App\Http\Controllers\Api\V1\Admin;
 */

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AssetsHistoryResource;
use App\Models\AssetsHistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssetsHistoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('assets_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AssetsHistoryResource(AssetsHistory::with(['asset', 'status', 'location', 'assigned_user'])->get());
    }
}
