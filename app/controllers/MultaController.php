<?php

class MultaController extends BaseController
{

	protected $multa;

	public function __construct(Multa $multa)
	{
		parent::__construct();
		$this->multa = $multa;
                require_once '/var/www/aplicacao/app/library/util.php';
	}

	public function index()
	{   
                
		$infracao = null;

		$sort = 'infracao';
		$order = Input::get('order') === 'desc' ? 'desc' : 'asc';

		$multa = $this->multa->orderBy($sort, $order);

		if(Input::has('infracao')) {
			$multa = $multa->where('infracao', 'LIKE', "%" . Input::get('infracao') . "%");
			$infracao = '&infracao=' . Input::get('infracao');
		}

		$multa = $multa->paginate(5);

		$pagination = $multa->appends(array(
			'infracao' => Input::get('infracao'),
			'sort' => Input::get('sort'),
			'order' => Input::get('order'),
		))->links();

		return View::make('multa.index')
			->with(array(
				'infracao' => Input::get('infracao'),
				'multas' => $multa,
				'pagination' => $pagination,
				'str' => '&order=' . (Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $infracao
		));
	}

	public function create()
	{
		return View::make('multa.create');
	}

	public function store()
	{
		$input = Input::all();
		$validator = Multa::validate($input);

		if($validator->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validator)
				->with('error', Util::message('MSG001'));
		} else {
			$this->multa->create($input);

			return Redirect::to('multa')
				->with('success', Util::message('MSG002'));
		}
	}

	public function edit($id)
	{
		$multa = $this->multa->find($id);

		if(is_null($multa)){
			return Redirect::to('multa')
				->with('error', Util::message('MSG003'));
		}

		return View::make('multa.edit')
			->with('multa', $multa);
	}

	public function update($id)
	{
		$input = Input::all();
		$input['id'] = $id;
                
		$validator = Multa::validate($input);

		if($validator->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validator)
				->with('error', Util::message('MSG004'));
		} else {
			$this->multa->find($id)->update($input);

			return Redirect::to('multa')
				->with('success', Util::message('MSG005'));
		}
	}

	public function destroy($id)
	{
		try {
			$this->multa->find($id)->delete();
			return Redirect::to('multa')
				->with('success', Util::message('MSG006'));
		} catch (Exception $e) {
			return Redirect::to('multa')
				->with('warning', Util::message('MSG007'));
		}
	}
}