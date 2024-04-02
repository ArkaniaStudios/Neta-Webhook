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

namespace neta\class;

use JsonSerializable;

final class Message implements JsonSerializable {
	/** @var mixed[] */
	private array $data = [];

	public function setContent(string $content) : void {
		$this->data["content"] = $content;
	}

	public function setName(string $name) : void {
		$this->data["username"] = $name;
	}

	public function setAvatar(string $url) : void {
		$this->data["avatar_url"] = $url;
	}

	public function setTts(bool $tts) : void {
		$this->data["tts"] = $tts;
	}

	public function addEmbed(?Embed $embed) : void {
		if ($embed !== null) {
			$this->data["embeds"][] = $embed->__toArray();
		}
	}

	public function jsonSerialize() : array {
		return $this->data;
	}

}
