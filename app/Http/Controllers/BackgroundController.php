<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBackgroundRequest;
use App\Http\Requests\UpdateBackgroundRequest;
use App\Models\Image;
use App\Repositories\BackgroundRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BackgroundController extends AppBaseController
{
    /** @var  BackgroundRepository */
    private $backgroundRepository;

    public function __construct(BackgroundRepository $backgroundRepo)
    {
        $this->backgroundRepository = $backgroundRepo;
    }

    /**
     * Display a listing of the Background.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $backgrounds = $this->backgroundRepository->all();

        return view('backgrounds.index')
            ->with('backgrounds', $backgrounds);
    }

    /**
     * Show the form for creating a new Background.
     *
     * @return Response
     */
    public function create()
    {
        return view('backgrounds.create');
    }

    /**
     * Store a newly created Background in storage.
     *
     * @param CreateBackgroundRequest $request
     *
     * @return Response
     */
    public function store(CreateBackgroundRequest $request)
    {
        $input = $request->all();
        $input["img"] = Image::createImage($request,"/assets/upload/bg/");
        $background = $this->backgroundRepository->create($input);

        Flash::success('Изображение успешно сохранено.');

        return redirect(route('backgrounds.index'));
    }

    /**
     * Display the specified Background.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $background = $this->backgroundRepository->find($id);

        if (empty($background)) {
            Flash::error('Изображение не найдено!');

            return redirect(route('backgrounds.index'));
        }

        return view('backgrounds.show')->with('background', $background);
    }

    /**
     * Show the form for editing the specified Background.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $background = $this->backgroundRepository->find($id);

        if (empty($background)) {
            Flash::error('Изображение не найдено!');

            return redirect(route('backgrounds.index'));
        }

        return view('backgrounds.edit')->with('background', $background);
    }

    /**
     * Update the specified Background in storage.
     *
     * @param int $id
     * @param UpdateBackgroundRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBackgroundRequest $request)
    {
        $background = $this->backgroundRepository->find($id);

        if (empty($background)) {
            Flash::error('Изображение не найдено!');

            return redirect(route('backgrounds.index'));
        }
        $input = $request->all();
        $input["img"] = Image::updateImage($background,$request,"/assets/upload/bg/");
        $background = $this->backgroundRepository->update($input, $id);

        Flash::success('Изображение успешно обновлено.');

        return redirect(route('backgrounds.index'));
    }

    /**
     * Remove the specified Background from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $background = $this->backgroundRepository->find($id);

        if (empty($background)) {
            Flash::error('Изображение не найдено!');

            return redirect(route('backgrounds.index'));
        }
        Image::deleteImage($background);
        $this->backgroundRepository->delete($id);

        Flash::success('Изображение успешно удалено.');

        return redirect(route('backgrounds.index'));
    }
}
