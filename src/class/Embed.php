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

final class Embed {
	private array $data;

	public function __toArray() : array {
		return $this->data;
	}

	public function setTitle(string $title) : self {
		$this->data["title"] = $title;
		return $this;
	}

	public function setDescription(string $description) : self {
		$this->data['description'] = $description;
		return $this;
	}

	public function setFooter(string $footer, ?string $iconUrl) : self {
		$this->data['footer'] = [
			'text'     => $footer,
			'icon_url' => $iconUrl
		];
		return $this;
	}

	public function setColor(int $color) : self {
		$this->data['color'] = $color;
		return $this;
	}

	public function setThumbnail(string $url) : self {
		$this->data['thumbnail'] = [
			'url' => $url
		];
		return $this;
	}

	public function setImage(string $url) : self {
		$this->data['image'] = [
			'url' => $url
		];
		return $this;
	}

	public function setAuthor(string $name, ?string $url = null, ?string $iconUrl = null) : self {
		$this->data['author'] = [
			'name'     => $name,
			'url'      => $url,
			'icon_url' => $iconUrl
		];
		return $this;
	}

	public function addField(string $name, string $value, bool $inline = false) : self {
		$this->data['fields'][] = [
			'name'   => $name,
			'value'  => $value,
			'inline' => $inline
		];
		return $this;
	}

}
