<?php
namespace wbb\system\event\listener;
use wcf\system\event\listener\IParameterizedEventListener;

/**
 * @author 	Christopher Walz
 * @license	http://www.cwalz.de/forum/index.php?page=TermsOfLicense
 * @package	de.cwalz.wscConnectWsf
 */
class WSCConnectWSFListener implements IParameterizedEventListener {
	private $eventObj;

	/**
	 * @inheritDoc
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters) {
		$this->eventObj = $eventObj;

		$parameters['de.cwalz.wscConnectWsf'] = [
			'object' => $this,
			// TODO add post/put methods
			'types' => [
				'getBoards',
				'getBoard',
				'getThreads',
				'getThread',
				'getPosts'
			]
		];
	}

	/**
	 * Returns all accessible boards
	 */
	public function getBoards() {
		// TODO
		$this->eventObj->sendJsonResponse([
			'foo' => 'bar'
		]);
	}

	/**
	 * Returns a specific board, if accessible
	 */
	public function getBoard() {
		// TODO
		$this->eventObj->sendJsonResponse([
			'foo' => 'bar'
		]);
	}

	/**
	 * Returns a limited amount of accessible threads in a board
	 */
	public function getThreads() {
		// TODO
		$this->eventObj->sendJsonResponse([
			'foo' => 'bar'
		]);
	}

	/**
	 * Returns a specific thread with an initial post list, if accessible
	 */
	public function getThread() {
		// TODO
		$this->eventObj->sendJsonResponse([
			'foo' => 'bar'
		]);
	}

	/**
	 * Returns a limited amount of accessible posts in a thread
	 */
	public function getPosts() {
		// TODO
		$this->eventObj->sendJsonResponse([
			'foo' => 'bar'
		]);
	}
}
