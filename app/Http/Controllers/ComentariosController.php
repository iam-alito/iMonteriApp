<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComentariosRequest;
use App\Http\Requests\UpdateComentariosRequest;
use App\Repositories\ComentariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComentariosController extends AppBaseController
{
    /** @var  ComentariosRepository */
    private $comentariosRepository;

    public function __construct(ComentariosRepository $comentariosRepo)
    {
        $this->comentariosRepository = $comentariosRepo;
    }

    /**
     * Display a listing of the Comentarios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comentariosRepository->pushCriteria(new RequestCriteria($request));
        $comentarios = $this->comentariosRepository->all();

        return view('comentarios.index')
            ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for creating a new Comentarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created Comentarios in storage.
     *
     * @param CreateComentariosRequest $request
     *
     * @return Response
     */
    public function store(CreateComentariosRequest $request)
    {
        $input = $request->all();

        $comentarios = $this->comentariosRepository->create($input);

        Flash::success('Comentarios saved successfully.');

        return redirect(route('comentarios.index'));
    }

    /**
     * Display the specified Comentarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comentarios = $this->comentariosRepository->findWithoutFail($id);

        if (empty($comentarios)) {
            Flash::error('Comentarios not found');

            return redirect(route('comentarios.index'));
        }

        return view('comentarios.show')->with('comentarios', $comentarios);
    }

    /**
     * Show the form for editing the specified Comentarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comentarios = $this->comentariosRepository->findWithoutFail($id);

        if (empty($comentarios)) {
            Flash::error('Comentarios not found');

            return redirect(route('comentarios.index'));
        }

        return view('comentarios.edit')->with('comentarios', $comentarios);
    }

    /**
     * Update the specified Comentarios in storage.
     *
     * @param  int              $id
     * @param UpdateComentariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComentariosRequest $request)
    {
        $comentarios = $this->comentariosRepository->findWithoutFail($id);

        if (empty($comentarios)) {
            Flash::error('Comentarios not found');

            return redirect(route('comentarios.index'));
        }

        $comentarios = $this->comentariosRepository->update($request->all(), $id);

        Flash::success('Comentarios updated successfully.');

        return redirect(route('comentarios.index'));
    }

    /**
     * Remove the specified Comentarios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comentarios = $this->comentariosRepository->findWithoutFail($id);

        if (empty($comentarios)) {
            Flash::error('Comentarios not found');

            return redirect(route('comentarios.index'));
        }

        $this->comentariosRepository->delete($id);

        Flash::success('Comentarios deleted successfully.');

        return redirect(route('comentarios.index'));
    }
}
