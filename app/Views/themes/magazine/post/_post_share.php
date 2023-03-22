<?php $postURL = urlencode(generatePostURL($post));
$postTitle = urlencode($post->title); ?>
<div class="btn-share">
    <a href="javascript:void(0)" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $postURL; ?>', 'Share This Post', 'width=640,height=450');return false" class="color-facebook"><i class="icon-facebook"></i></a>
</div>
<div class="btn-share">
    <a href="javascript:void(0)" onclick="window.open('https://twitter.com/share?url=<?= $postURL; ?>&amp;text=<?= $postTitle; ?>', 'Share This Post', 'width=640,height=450');return false" class="color-twitter"><i class="icon-twitter"></i></a>
</div>
<div class="btn-share">
    <a href="javascript:void(0)" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?= $postURL; ?>', 'Share This Post', 'width=640,height=450');return false" class="color-linkedin"><i class="icon-linkedin"></i></a>
</div>
<div class="btn-share">
    <a href="https://api.whatsapp.com/send?text=<?= $postTitle; ?> - <?= $postURL; ?>" class="color-whatsapp" target="_blank"><i class="icon-whatsapp"></i></a>
</div>
<div class="btn-share">
    <a href="javascript:void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?= $postURL; ?>&amp;media=<?= base_url($post->image_default); ?>', 'Share This Post', 'width=640,height=450');return false" class="color-pinterest"><i class="icon-pinterest"></i></a>
</div>
<div class="btn-share">
    <a href="javascript:void(0)" onclick="window.open('http://www.tumblr.com/share/link?url=<?= $postURL; ?>&amp;title=<?= $postTitle; ?>', 'Share This Post', 'width=640,height=450');return false" class="color-tumblr"><i class="icon-tumblr"></i></a>
</div>
<div class="btn-share ms-auto">
    <div class="btn-inner">
        <a href="javascript:void(0)" id="print_post" class="btn-print" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= trans("print"); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"></path>
            </svg>
        </a>
    </div>
    <?php if (authCheck()) :
        if (isPostInReadingList($post->id) == false) : ?>
            <div class="btn-inner">
                <a href="javascript:void(0)" class="btn-reading-list" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= trans("add_reading_list"); ?>" onclick="addRemoveReadingListItem('<?= $post->id; ?>');">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </a>
            </div>
        <?php else: ?>
            <div class="btn-inner">
                <a href="javascript:void(0)" class="btn-reading-list" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= trans("delete_reading_list"); ?>" onclick="addRemoveReadingListItem('<?= $post->id; ?>');">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </a>
            </div>
        <?php endif;
    else:
        if ($generalSettings->registration_system == 1): ?>
            <div class="btn-inner">
                <a href="javascript:void(0)" class="btn-reading-list"  data-bs-toggle="modal" data-bs-target="#modalLogin" title="<?= trans("add_reading_list"); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </a>
            </div>
        <?php endif;
    endif; ?>
</div>