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

namespace neta\events;

use neta\class\Message;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\event\Event;

class WebhookSendEvent extends Event implements Cancellable {
	use CancellableTrait;

	public function __construct(
		private string $url,
		private Message $message,
	) {
	}

	public function setMessage(Message $message) : void {
		$this->message = $message;
	}

	public function getMessage() : Message {
		return $this->message;
	}

	public function setUrl(string $url) : void {
		$this->url = $url;
	}

	public function getUrl() : string {
		return $this->url;
	}

}
