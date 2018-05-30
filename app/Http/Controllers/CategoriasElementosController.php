<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriasElementosRequest;
use App\Http\Requests\UpdateCategoriasElementosRequest;
use App\Repositories\CategoriasElementosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Elementos;
use App\Models\Categorias;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoriasElementosController extends AppBaseController
{
    /** @var  CategoriasElementosRepository */
    private $categoriasElementosRepository;

    public function __construct(CategoriasElementosRepository $categoriasElementosRepo)
    {
        $this->categoriasElementosRepository = $categoriasElementosRepo;
    }

    /**
     * Display a listing of the CategoriasElementos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*$this->categoriasElementosRepository->pushCriteria(new RequestCriteria($request));
        $categoriasElementos = $this->categoriasElementosRepository->all();
        */
        $categoriasElementos = DB::select('
                    SELECT ce.id, c.descripcion as categorias_id, e.descripcion as elementos_id
                    FROM categorias c, elementos e,categorias_elementos ce
                    WHERE c.id=ce.categorias_id AND e.id=ce.elementos_id
            ');
        return view('categorias_elementos.index')
            ->with('categoriasElementos', $categoriasElementos);
    }

    /**
     * Show the form for creating a new CategoriasElementos.
     *
     * @return Response
     */
    public function create()
    {
        $categorias=Categorias::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['categorias'=>$categorias,'elementos' => $elementos];
        return view('categorias_elementos.create')->with('datos',$datos);
    }

    /**
     * Store a newly created CategoriasElementos in storage.
     *
     * @param CreateCategoriasElementosRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriasElementosRequest $request)
    {
        $input = $request->all();

        $categoriasElementos = $this->categoriasElementosRepository->create($input);

        Flash::success('Categorias Elementos saved successfully.');

        return redirect(route('categoriasElementos.index'));
    }

    /**
     * Display the specified CategoriasElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$categoriasElementos = $this->categoriasElementosRepository->findWithoutFail($id);
        $categoriasElementos = DB::select('
                SELECT ce.id, c.descripcion as categorias_id, e.descripcion as elementos_id, ce.created_at, ce.updated_at
                FROM categorias c, elementos e,categorias_elementos ce
                WHERE c.id=ce.categorias_id AND e.id=ce.elementos_id AND ce.id='.$id
        );
        if (empty($categoriasElementos)) {
            Flash::error('Categorias Elementos not found');

            return redirect(route('categoriasElementos.index'));
        }

        return view('categorias_elementos.show')->with('categoriasElementos', $categoriasElementos);
    }

    /**
     * Show the form for editing the specified CategoriasElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriasElementos = $this->categoriasElementosRepository->findWithoutFail($id);
        $categorias=Categorias::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['categorias'=>$categorias,'elementos' => $elementos];
        if (empty($categoriasElementos)) {
            Flash::error('Categorias Elementos not found');

            return redirect(route('categoriasElementos.index'));
        }
        $categorias=Categorias::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['categorias'=>$categorias,'elementos' => $elementos,'categoriasElementos'=>$categoriasElementos];
        return view('categorias_elementos.edit')->with('datos', $datos);
    }

    /**
     * Update the specified CategoriasElementos in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriasElementosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriasElementosRequest $request)
    {
        $categoriasElementos = $this->categoriasElementosRepository->findWithoutFail($id);

        if (empty($categoriasElementos)) {
            Flash::error('Categorias Elementos not found');

            return redirect(route('categoriasElementos.index'));
        }

        $categoriasElementos = $this->categoriasElementosRepository->update($request->all(), $id);

        Flash::success('Categorias Elementos updated successfully.');

        return redirect(route('categoriasElementos.index'));
    }

    /**
     * Remove the specified CategoriasElementos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriasElementos = $this->categoriasElementosRepository->findWithoutFail($id);

        if (empty($categoriasElementos)) {
            Flash::error('Categorias Elementos not found');

            return redirect(route('categoriasElementos.index'));
        }

        $this->categoriasElementosRepository->delete($id);

        Flash::success('Categorias Elementos deleted successfully.');

        return redirect(route('categoriasElementos.index'));
    }
}
