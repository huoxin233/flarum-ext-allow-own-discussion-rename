<?php

namespace Huoxin\AllowOwnDiscussionRename;

use Flarum\User\User;
use Flarum\Discussion\Discussion;
use Flarum\Settings\SettingsRepositoryInterface;
use Flarum\User\Access\AbstractPolicy;

class CustomDiscussionPolicy extends AbstractPolicy
{
    /**
     * @var SettingsRepositoryInterface
     */
    protected $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param User $actor
     * @param \Flarum\Discussion\Discussion $discussion
     * @return bool|null
     */
    public function rename(User $actor, Discussion $discussion): ?string
    {
        if ($discussion->user_id == $actor->id && $actor->can('reply', $discussion)) {
            $allowRenaming = $this->settings->get('allow_renaming');

            if ($allowRenaming === '-1'
                || ($allowRenaming === 'reply' && $discussion->participant_count <= 1)
                || (is_numeric($allowRenaming) && $discussion->created_at->diffInMinutes(null, true) < $allowRenaming)) {
                return $this->forceAllow();
            }
        }

        return null;
    }

}