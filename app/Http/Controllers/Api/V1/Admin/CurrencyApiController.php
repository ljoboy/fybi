<?php
/**
 * FILE CurrencyApiController.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 4:24 PM
 */


namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Http\Resources\Admin\CurrencyResource;
use App\Models\Currency;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CurrencyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('currency_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CurrencyResource(Currency::all());
    }

    public function store(StoreCurrencyRequest $request)
    {
        $currency = Currency::create($request->all());

        return (new CurrencyResource($currency))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Currency $currency)
    {
        abort_if(Gate::denies('currency_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CurrencyResource($currency);
    }

    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $currency->update($request->all());

        return (new CurrencyResource($currency))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Currency $currency)
    {
        abort_if(Gate::denies('currency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $currency->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
