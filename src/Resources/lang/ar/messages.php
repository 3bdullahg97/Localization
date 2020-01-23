<?php
$singular_name = 'العنصر';
$plural_name = 'العناصر';

return [
    'success' => [
        'create' => 'تمت إضافة ' . $singular_name . ' بنجاح',
        'update' => 'تم تعديل بيانات ' . $singular_name . ' بنجاح ',
        'delete' => '{1} تم حذف ' . $singular_name . ' بنجاح|[2,*] تم حذف ' . $plural_name . ' بنجاح',
        'restore' => '{1} تم استعادة ' . $singular_name . ' بنجاح|[2,*] تمت استعادة ' . $plural_name . ' بنجاح',
    ],
    'fail' => [
        'show'   => 'هذا ' . $singular_name . ' غير موجود',
        'create' => 'حدث خطأ أثناء أضافة ' . $singular_name . '',
        'update' => 'حدث خطأ أثناء تعديل بيانات ' . $singular_name . '',
        'delete' => 'حدث خطأ أثناء حذف ' . $singular_name . '',
        'restore' => 'حدث خطأ أثناء الإستعادة'
    ]
];
