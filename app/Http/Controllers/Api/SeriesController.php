<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeriesController extends Controller
{
    public function __construct(
        private SeriesRepository $seriesRepository
    ) {}

    public function index()
    {
        return response()->json(Series::all(), Response::HTTP_OK);
    }

    public function store(SeriesFormRequest $request)
    {
        $series = $this->seriesRepository->add($request);

        return response()->json($series, Response::HTTP_CREATED);
    }

    public function show(int $series)
    {
        $seriesModel = Series::with('seasons.episodes')->find($series);

        if ($seriesModel == null) {
            return response()->json(['message' => 'Series not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($seriesModel, Response::HTTP_OK);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return response()->json($series, Response::HTTP_CREATED);
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return response()->noContent();
    }
}
