<?php

namespace Scalewest\FirestoreEloquent\Firestore\Eloquent\Traits;

use Scalewest\FirestoreEloquent\Firestore\Relations\{FHasMany, FHasOne, FBelongsTo};

trait FRelations
{
    use FHasOne, FHasMany, FBelongsTo;
}
