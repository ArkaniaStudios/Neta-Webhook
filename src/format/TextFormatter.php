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

namespace neta\format;

function underline(string $text) : string {
	return '__' . $text . '__';
}

function bolt(string $text) : string {
	return '**' . $text . '**';
}

function italic(string $text) : string {
	return '*' . $text . '*';
}

function highlight(string $text) : string {
	return '~~' . $text . '~~';
}

function title(string $text) : string {
	return '# ' . $text;
}

function subTitle(string $text) : string {
	return '## ' . $text;
}

function littleTitle(string $text) : string {
	return '### ' . $text;
}

function hyperlink(string $text, string $url) : string {
	return '[' . $text . '](' . $url . ')';
}
