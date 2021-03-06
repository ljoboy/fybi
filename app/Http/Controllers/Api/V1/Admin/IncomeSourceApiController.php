<?php
/**
 * FILE IncomeSourceApiController.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 4:32 PM
 */

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIncomeSourceRequest;
use App\Http\Requests\UpdateIncomeSourceRequest;
use App\Http\Resources\Admin\IncomeSourceResource;
use App\Models\IncomeSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IncomeSourceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('income_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IncomeSourceResource(IncomeSource::all());
    }

    public function store(StoreIncomeSourceRequest $request)
    {
        $incomeSource = IncomeSource::create($request->all());

        return (new IncomeSourceResource($incomeSource))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(IncomeSource $incomeSource)
    {
        abort_if(Gate::denies('income_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IncomeSourceResource($incomeSource);
    }

    public function update(UpdateIncomeSourceRequest $request, IncomeSource $incomeSource)
    {
        $incomeSource->update($request->all());

        return (new IncomeSourceResource($incomeSource))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(IncomeSource $incomeSource)
    {
        abort_if(Gate::denies('income_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $incomeSource->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
