<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<article
    <?php echo e($attributes->merge(['class' => 'transition-colors duration-300 hover:bg-green-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])); ?>>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            
             <img src="img/<?php echo e(asset('storage/app/public/' . $post->thumbnail)); ?>.jpg" onerror="this.onerror=null;this.src='/images/picture-svgrepo-com.jpg';" alt="Blog Post illustration" class="rounded"/>        
        </div>

        <div class="mt-6 flex flex-col justify-between flex-1">
            <header>
                <div class="space-x-2">
                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category-button','data' => ['category' => $post->category]]); ?>
<?php $component->withName('category-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl clamp one-line">
                        <a href="/posts/<?php echo e($post->slug); ?>">
                            <?php echo e($post->title); ?>

                        </a>
                    </h1>

                    <span class="mt-2 block text-green-400 text-xs">
                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                <?php echo $post->excerpt; ?>

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="img/<?php echo e(asset('storage/app/public/' . $post->thumbnail)); ?>.jpg" onerror="this.onerror=null;this.src='/images/id-card-svgrepo-com.jpg';" alt="Blog Post illustration" class="rounded"/>
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/<?php echo e($post->slug); ?>"
                       class="transition-colors duration-300 text-xs text-white font-semibold bg-green-500 hover:bg-green-200 hover:text-green-700 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
<?php /**PATH /home/ubuntu/cheep/resources/views/components/post-card.blade.php ENDPATH**/ ?>