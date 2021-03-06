<?php
App::uses('AppController', 'Controller');
/**
 * Likes Controller
 *
 * @property Like $Like
 * @property PaginatorComponent $Paginator
 */
class LikesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Like->recursive = 0;
		$this->set('likes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Like->exists($id)) {
			throw new NotFoundException(__('Invalid like'));
		}
		$options = array('conditions' => array('Like.' . $this->Like->primaryKey => $id));
		$this->set('like', $this->Like->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Like->create();
			if ($this->Like->save($this->request->data)) {
				$this->Session->setFlash(__('The like has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The like could not be saved. Please, try again.'));
			}
		}
		$articles = $this->Like->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Like->exists($id)) {
			throw new NotFoundException(__('Invalid like'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Like->save($this->request->data)) {
				$this->Session->setFlash(__('The like has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The like could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Like.' . $this->Like->primaryKey => $id));
			$this->request->data = $this->Like->find('first', $options);
		}
		$articles = $this->Like->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Like->delete()) {
			$this->Session->setFlash(__('The like has been deleted.'));
		} else {
			$this->Session->setFlash(__('The like could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
