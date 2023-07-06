<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest from <span class="text-green-500">CafeCamping</span>
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-green-500 text-white rounded-xl">
            <?php if (isset($component)) { $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryDropdown::class, []); ?>
<?php $component->withName('category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d)): ?>
<?php $component = $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d; ?>
<?php unset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d); ?>
<?php endif; ?>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-green-500 text-white rounded-xl px-3 py-2">
            <form method="GET" action="/">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                <?php endif; ?>

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-white font-semibold text-sm"
                       value="<?php echo e(request('search')); ?>"
                >
            </form>
        </div>
    </div>
</header>
<?php /**PATH /home/ubuntu/cheep/resources/views/posts/_header.blade.php ENDPATH**/ ?>