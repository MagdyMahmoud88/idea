<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelLevelSetList;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    // حدد المجلدات التي سيتم فحصها
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    // تخطي مجلدات معينة أو ملفات لا تريد لمسها
    ->withSkip([
        __DIR__.'/bootstrap/cache',
        __DIR__.'/storage',
    ])
    ->withSets([
        // 1. الترقية لإصدار لارافيل 11
        LaravelLevelSetList::UP_TO_LARAVEL_110,

        // 2. تحسين جودة كود لارافيل (مثل استخدام الـ Collections بشكل أفضل)
        LaravelSetList::LARAVEL_CODE_QUALITY,

        // 3. قواعد PHP العامة لتحسين الجودة (مثل تبسيط الـ if-statements)
        SetList::CODE_QUALITY,

        // 4. حذف الكود الذي لا يتم استخدامه تلقائياً
        SetList::DEAD_CODE,
    ])
    // تفعيل خاصية إضافة الـ Type Hints تلقائياً (احترافي جداً)
    ->withTypeCoverageLevel(0);
