<?php

/*
 *     _      ____    _  __     _      _   _   ___      _
 *    / \    |  _ \  | |/ /    / \    | \ | | |_ _|    / \
 *   / _ \   | |_) | | ' /    / _ \   |  \| |  | |    / _ \
 *  / ___ \  |  _ <  | . \   / ___ \  | |\  |  | |   / ___ \
 * /_/   \_\ |_| \_\ |_|\_\ /_/   \_\ |_| \_| |___| /_/   \_\
 *
 * Facilitez la gestion des webhooks et des messages envoyés sur Discord avec Neta-Webhook,
 *  une API conçue pour simplifier les interactions.
 *
 *
 * @author Julien
 * @link https://github.com/ArkaniaStudios/Neta-Webhook
 * @version 1.0.0
 *
 */

declare(strict_types=1);

namespace neta;

use neta\class\Message;
use neta\events\WebhookSendEvent;
use neta\task\WebhookAsyncTask;
use pocketmine\Server;
use function json_encode;

class Webhook {
	private string $url;
	protected Message $message;

	public function __construct(
		string $url,
		Message $message
	) {
		$this->url     = $url;
		$this->message = $message;
	}

	public function submit() : void {
		$ev = new WebhookSendEvent(
			$this->url,
			$this->message
		);
		$ev->call();
		if($ev->isCancelled()) {
			return;
		}
		Server::getInstance()->getAsyncPool()->submitTask(
			new WebhookAsyncTask(
				$this->url,
				json_encode($this->message)
			)
		);
	}

}
