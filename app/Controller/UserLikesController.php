<?php
App::uses('AppController', 'Controller');
/**
 * UserLikes Controller
 *
 * @property UserLike $UserLike
 * @property PaginatorComponent $Paginator
 */
class UserLikesController extends AppController {

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
		$this->UserLike->recursive = 0;
		$this->set('userLikes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserLike->exists($id)) {
			throw new NotFoundException(__('Invalid user like'));
		}
		$options = array('conditions' => array('UserLike.' . $this->UserLike->primaryKey => $id));
		$this->set('userLike', $this->UserLike->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserLike->create();
			if ($this->UserLike->save($this->request->data)) {
				$this->Session->setFlash(__('The user like has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user like could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserLike->User->find('list');
		$articles = $this->UserLike->Article->find('list');
		$this->set(compact('users', 'articles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserLike->exists($id)) {
			throw new NotFoundException(__('Invalid user like'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserLike->save($this->request->data)) {
				$this->Session->setFlash(__('The user like has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user like could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserLike.' . $this->UserLike->primaryKey => $id));
			$this->request->data = $this->UserLike->find('first', $options);
		}
		$users = $this->UserLike->User->find('list');
		$articles = $this->UserLike->Article->find('list');
		$this->set(compact('users', 'articles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserLike->id = $id;
		if (!$this->UserLike->exists()) {
			throw new NotFoundException(__('Invalid user like'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserLike->delete()) {
			$this->Session->setFlash(__('The user like has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user like could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
