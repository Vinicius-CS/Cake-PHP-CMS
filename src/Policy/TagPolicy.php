<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Tag;
use Authorization\IdentityInterface;

/**
 * Tag policy
 */
class TagPolicy
{
    /**
     * Check if $user can add Tag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Tag $tag)
    {
        // All logged in users can add tags.
        return true;
    }

    /**
     * Check if $user can edit Tag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Tag $tag)
    {
        // All logged in users can edit tags.
        return true;
    }

    /**
     * Check if $user can delete Tag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Tag $tag)
    {
        // All logged in users can delete tags.
        return true;
    }

    /**
     * Check if $user can view Tag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canView(IdentityInterface $user, Tag $tag)
    {
        // All logged in users can view tags.
        return true;
    }

    /**
     * Check if $user can index Tag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canIndex(IdentityInterface $user, Tag $tag)
    {
        // All logged in users can index users.
        return true;
    }
}
