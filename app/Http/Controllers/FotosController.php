<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFotosRequest;
use App\Http\Requests\UpdateFotosRequest;
use App\Repositories\FotosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Elementos;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FotosController extends AppBaseController
{
    /** @var  FotosRepository */
    private $fotosRepository;

    public function __construct(FotosRepository $fotosRepo)
    {
        $this->fotosRepository = $fotosRepo;
    }

    /**
     * Display a listing of the Fotos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*$this->fotosRepository->pushCriteria(new RequestCriteria($request));
        $fotos = $this->fotosRepository->all();*/
        $fotos = DB::select('
                SELECT f.id, e.descripcion as elementos_id, f.foto
                FROM elementos e, fotos f
                WHERE e.id=f.elementos_id'
        );
        return view('fotos.index')
            ->with('fotos', $fotos);
    }

    /**
     * Show the form for creating a new Fotos.
     *
     * @return Response
     */
    public function create()
    {
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos];
        return view('fotos.create')->with('datos',$datos);
    }

    /**
     * Store a newly created Fotos in storage.
     *
     * @param CreateFotosRequest $request
     *
     * @return Response
     */
    public function store(CreateFotosRequest $request)
    {
        $input = $request->all();

        $fotos = $this->fotosRepository->create($input);

        Flash::success('Fotos saved successfully.');

        return redirect(route('fotos.index'));
    }

    /**
     * Display the specified Fotos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$fotos = $this->fotosRepository->findWithoutFail($id);
        $fotos = DB::select('
                SELECT f.id, e.descripcion as elementos_id, f.foto, f.created_at, f.updated_at
                FROM elementos e, fotos f
                WHERE e.id=f.elementos_id AND f.id='.$id
        );
        if (empty($fotos)) {
            Flash::error('Fotos not found');

            return redirect(route('fotos.index'));
        }

        return view('fotos.show')->with('fotos', $fotos);
    }

    /**
     * Show the form for editing the specified Fotos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fotos = $this->fotosRepository->findWithoutFail($id);
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos];
        if (empty($fotos)) {
            Flash::error('Fotos not found');

            return redirect(route('fotos.index'));
        }
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos,'fotos'=>$fotos];
        return view('fotos.edit')->with('datos', $datos);
    }

    /**
     * Update the specified Fotos in storage.
     *
     * @param  int              $id
     * @param UpdateFotosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFotosRequest $request)
    {
        $fotos = $this->fotosRepository->findWithoutFail($id);

        if (empty($fotos)) {
            Flash::error('Fotos not found');

            return redirect(route('fotos.index'));
        }

        $fotos = $this->fotosRepository->update($request->all(), $id);

        Flash::success('Fotos updated successfully.');

        return redirect(route('fotos.index'));
    }

    /**
     * Remove the specified Fotos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fotos = $this->fotosRepository->findWithoutFail($id);

        if (empty($fotos)) {
            Flash::error('Fotos not found');

            return redirect(route('fotos.index'));
        }

        $this->fotosRepository->delete($id);

        Flash::success('Fotos deleted successfully.');

        return redirect(route('fotos.index'));
    }
}
