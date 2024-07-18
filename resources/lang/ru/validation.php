<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Вы должны принять :attribute.',
    'active_url'           => 'Поле :attribute содержит недействительный URL.',
    'after'                => 'В поле :attribute должна быть дата после :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num'            => 'Поле :attribute может содержать только буквы и цифры.',
    'array'                => 'Поле :attribute должно быть массивом.',
    'before'               => 'В поле :attribute должна быть дата до :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть между :min и :max.',
        'array'   => 'Количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean'              => 'Поле :attribute должно иметь значение логического типа.',
    'confirmed'            => 'Поле :attribute не совпадает с подтверждением.',
    'date'                 => 'Поле :attribute не является датой.',
    'date_format'          => 'Поле :attribute не соответствует формату :format.',
    'different'            => 'Поля :attribute и :other должны различаться.',
    'digits'               => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between'       => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions'           => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct'             => 'Поле :attribute содержит повторяющееся значение.',
    'email'                => 'Поле :attribute должно быть действительным электронным адресом.',
    'file'                 => 'Поле :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',
    'exists'               => 'Выбранное значение для :attribute некорректно.',
    'image'                => 'Поле :attribute должно быть изображением.',
    'enum'                   => 'Выбранное значение для :attribute ошибочно.',
    'in'                   => 'Выбранное значение для :attribute ошибочно.',
    'in_array'             => 'Поле :attribute не существует в :other.',
    'integer'              => 'Поле :attribute должно быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть действительным IP-адресом.',
    'json'                 => 'Поле :attribute должно быть JSON строкой.',
    'max'                  => [
        'numeric' => 'Поле :attribute не может быть более :max.',
        'file'    => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute не может превышать :max.',
        'array'   => 'Количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes'            => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть не менее :min.',
        'array'   => 'Количество элементов в поле :attribute должно быть не менее :min.',
    ],
    'not_in'               => 'Выбранное значение для :attribute ошибочно.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'Поле :attribute имеет ошибочный формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значение :attribute должно совпадать с :other.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'file'    => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть равным :size.',
        'array'   => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'string'               => 'Поле :attribute должно быть строкой.',
    'timezone'             => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique'               => 'Такое значение поля :attribute уже существует.',
    'uploaded'             => 'Загрузка поля :attribute не удалась.',
    'url'                  => 'Поле :attribute имеет ошибочный формат.',
    'check_url'            => 'Указанное поле не должно содержать ссылок!',
    'current_password'     => 'Текущий пароль указан не верно.',
    'present_if'           => 'Поле :attribute должно присутствовать, когда :other равно :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'name.required' => 'Введите имя.',
        'name.min'      => 'Имя должно содержать больше :min символов.',
        'name.max'      => 'Имя должно содержать меньше :max символа.',
        'name.string'   => 'Имя должно быть строкой',

        'surname.required' => 'Введите фамилию.',
        'surname.min'      => 'Фамилия должна содержать больше :min символов.',
        'surname.max'      => 'Фамилия должна содержать меньше :max символа.',
        'surname.string'   => 'Фамилия должно быть строкой',

        'city.required' => 'Введите город.',
        'city.min'      => 'Город должен содержать больше :min символа.',
        'city.max'      => 'Город должен содержать меньше :max символа.',
        'city.string'   => 'Город должен быть строкой',

        'school.required' => 'Введите школу/Название компании.',
        'school.min'      => 'Школа/Компания должна содержать больше :min символа.',
        'school.max'      => 'Школа/Компания должна содержать меньше :max символа.',

        'email.required' => 'Введите почту.',
        'email.min'      => 'Почта должна содержать больше :min символов.',
        'email.max'      => 'Почта должна содержать меньше :max символа.',
        'email.email'    => 'Неправильный адрес электронной почты',
        'email.unique'   => 'Почта уже занята.',

        'password.required'  => 'Введите пароль.',
        'password.required_without'  => 'Введите пароль.',
        'password.confirmed' => 'Пароли не совпадают.',
        'password.min'       => "Пароль должен содержать больше :min символов.",
        'password.max'       => 'Пароль должен содержать меньше :max символа.',
        'password.alpha_num' => 'Пароль должен содержать только буквы и цифры.',

        'password_frontend.required'  => 'Введите пароль.',
        'password_frontend.required_without'  => 'Введите пароль.',
        'password_frontend.confirmed' => 'Пароли не совпадают.',
        'password_frontend.min'       => 'Пароль должен содержать больше :min символов.',
        'password_frontend.max'       => 'Пароль должен содержать меньше :max символа.',
        'password_frontend.alpha_num' => 'Пароль должен содержать только буквы и цифры.',

        'accepted'          => 'Нужно согласиться с политикой.',
        'phone.required_if' => 'Введите номер телефона.',
        'role.required'     => 'Выберите: Кто Вы?',
        'accepted.accepted' => 'Дайте согласие на сбор и обработку персональных данных.',
        'promo_code'        => 'Промо-код уже был использован',
        'available'         => 'Недоступно для этого пользователя',
        "required_pair"     => "Для :attribute должна быть пара.",
        "exists_email"      => "Учителя с таким email не существует."
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    'error' => 'Невалидные данные'
];
