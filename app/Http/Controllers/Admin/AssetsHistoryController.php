<?php
/**
 * FILE AssetshistoryController.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 5:03 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetLocation;
use App\Models\AssetsHistory;
use App\Models\AssetStatus;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssetsHistoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('assets_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assetsHistories = AssetsHistory::with(['asset', 'status', 'location', 'assigned_user'])->get();

        $assets = Asset::get();

        $asset_statuses = AssetStatus::get();

        $asset_locations = AssetLocation::get();

        $users = User::get();

        return view('admin.assetsHistories.index', compact('assetsHistories', 'assets', 'asset_statuses', 'asset_locations', 'users'));
    }
}
