<?php
/*
 * Copyright (c) 2015, Sgt. Kabukiman, https://github.com/sgt-kabukiman
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

namespace horaro\WebApp\Transformer;

class IndexTransformer extends BaseTransformer {
	public function transform() {
		return [
			'links' => [
				['rel' => 'version1', 'uri' => $this->url('/v1')],
			]
		];
	}
}
