<?php

/*
 * This file is part of huoxin/allow-own-discussion-rename.
 *
 * Copyright (c) 2025 huoxin.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Huoxin\AllowOwnDiscussionRename;

use Flarum\Extend;
use Flarum\Discussion\Discussion;
use Huoxin\AllowOwnDiscussionRename\CustomDiscussionPolicy;

return [
    (new Extend\Policy())
        ->modelPolicy(Discussion::class, CustomDiscussionPolicy::class),
];
