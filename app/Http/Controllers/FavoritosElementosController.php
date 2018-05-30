<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFavoritosElementosRequest;
use App\Http\Requests\UpdateFavoritosElementosRequest;
use App\Repositories\FavoritosElementosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FavoritosElementosController extends AppBaseController
{
    /** @var  FavoritosElementosRepository */
    private $favoritosElementosRepository;

    public function __construct(FavoritosElementosRepository $favoritosElementosRepo)
    {
        $this->favoritosElementosRepository = $favoritosElementosRepo;
    }

    /**
     * Display a listing of the FavoritosElementos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->favoritosElementosRepository->pushCriteria(new RequestCriteria($request));
        $favoritosElementos = $this->favoritosElementosRepository->all();

        return view('favoritos_elementos.index')
            ->with('favoritosElementos', $favoritosElementos);
    }

    /**
     * Show the form for creating a new FavoritosElementos.
     *
     * @return Response
     */
    public function create()
    {
        return view('favoritos_elementos.create');
    }

    /**
     * Store a newly created FavoritosElementos in storage.
     *
     * @param CreateFavoritosElementosRequest $request
     *
     * @return Response
     */
    public function store(CreateFavoritosElementosRequest $request)
    {
        $input = $request->all();

        $favoritosElementos = $this->favoritosElementosRepository->create($input);

        Flash::success('Favoritos Elementos saved successfully.');

        return redirect(route('favoritosElementos.index'));
    }

    /**
     * Display the specified FavoritosElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $favoritosElementos = $this->favoritosElementosRepository->findWithoutFail($id);

        if (empty($favoritosElementos)) {
            Flash::error('Favoritos Elementos not found');

            return redirect(route('favoritosElementos.index'));
        }

        return view('favoritos_elementos.show')->with('favoritosElementos', $favoritosElementos);
    }

    /**
     * Show the form for editing the specified FavoritosElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $favoritosElementos = $this->favoritosElementosRepository->findWithoutFail($id);

        if (empty($favoritosElementos)) {
            Flash::error('Favoritos Elementos not found');

            return redirect(route('favoritosElementos.index'));
        }

        return view('favoritos_elementos.edit')->with('favoritosElementos', $favoritosElementos);
    }

    /**
     * Update the specified FavoritosElementos in storage.
     *
     * @param  int              $id
     * @param UpdateFavoritosElementosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFavoritosElementosRequest $request)
    {
        $favoritosElementos = $this->favoritosElementosRepository->findWithoutFail($id);

        if (empty($favoritosElementos)) {
            Flash::error('Favoritos Elementos not found');

            return redirect(route('favoritosElementos.index'));
        }

        $favoritosElementos = $this->favoritosElementosRepository->update($request->all(), $id);

        Flash::success('Favoritos Elementos updated successfully.');

        return redirect(route('favoritosElementos.index'));
    }

    /**
     * Remove the specified FavoritosElementos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $favoritosElementos = $this->favoritosElementosRepository->findWithoutFail($id);

        if (empty($favoritosElementos)) {
            Flash::error('Favoritos Elementos not found');

            return redirect(route('favoritosElementos.index'));
        }

        $this->favoritosElementosRepository->delete($id);

        Flash::success('Favoritos Elementos deleted successfully.');

        return redirect(route('favoritosElementos.index'));
    }
}
