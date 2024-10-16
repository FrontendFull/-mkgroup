@extends('app')
@section('class', 'main-page-page')

@section('content')
    <div class="banner overflow-x">
        <img class="banner-deco" data-aos="fade-up" src="/images/banner-deco.webp" alt="#">
        <div class="container">
            <div class="banner__info">
                <div class="banner__title h1" data-aos="fade-up">Lorem ipsum dolor <span>sit amet</span> consectetur
                </div>
                <div class="banner__text" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur. Pharetra velit
                    tincidunt velit nam at
                    aliquet adipiscing eu tortor. Tortor ac pharetra dictum metus.
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="banner-slider-wrap">
                <div class="banner-slider-buttons">
                    <div class="banner-slider-nav"></div>
                    <a href="#" class="banner-button">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#arrow"></use>
                        </svg>
                        <span>Послуги</span>
                    </a>
                </div>
                <div class="banner-slider">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="banner-slide">
                            <img src="https://picsum.photos/1090/500" alt="#">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="company-division  anchor-wrap container my-content">
        <div class="anchor" id="company"></div>
        <div class="company-inner">
            <h1 class="company-title" data-aos="fade-right"> Про нас</h1>
            <div class="company-info">
                <div class="company-info__text" data-aos="fade-up">{{ fake()->sentence(20) }}</div>
                <div class="company-info__text-alt" data-aos="fade-up">{{ fake()->sentence(65) }}</div>
                <div class="company-info__row" data-aos="fade-up">
                    <div class="company-info__card">
                        <div class="company-info__card-title" data-number="{{fake()->randomNumber(4)}}">0</div>
                        <div class="company-info__card-text">{{ fake()->sentence(6) }}</div>
                    </div>
                    <div class="company-info__card">
                        <div class="company-info__card-title" data-number="{{fake()->randomNumber(4)}}">0</div>
                        <div class="company-info__card-text">{{ fake()->sentence(6) }}</div>
                    </div>
                    <div class="company-info__card">
                        <div class="company-info__card-title" data-number="{{fake()->randomNumber(4)}}">0</div>
                        <div class="company-info__card-text">{{ fake()->sentence(6) }}</div>
                    </div>
                </div>
                <div class="company-info__image" data-aos="fade-up">
                    <img src="https://picsum.photos/940/395" alt="#">
                </div>
            </div>
        </div>
    </div>

    <div class="services-division  anchor-wrap container my-content">
        <div class="anchor" id="services"></div>
        <div class="title-wrap" data-aos="fade-up">
            <div class="h1 title-division">Наші <span>послуги</span></div>
            <div class="button">
                <span>Дивитись повністю</span>
            </div>
        </div>
        <div class="services-mesh">
            @for ($i = 1; $i <= 4; $i++)
                <div class="service-card" data-aos="fade-up">
                    <div class="service-card__image">
                        <img src="https://picsum.photos/810/400" alt="#">
                    </div>
                    <div class="service-card__info service-card__info_main">
                        <div class="service-card__title">{{ fake()->sentence(5) }}</div>
                        <div class="service-card__subtitle">{{ fake()->sentence(12) }}</div>
                    </div>
                    <div class="service-card__info service-card__info_alt">
                        <div class="service-card__title">{{ fake()->sentence(5) }}</div>
                        <div class="service-card__text">{{ fake()->sentence(50) }}</div>
                        <div class="service-card__hr"></div>
                        <div class="service-card__more">
                            <span>Отримати додаткову інформацію</span>
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="trademarks-division  anchor-wrap container my-content">
        <div class="anchor" id="trademarks"></div>
        <div class="title-wrap" data-aos="fade-up">
            <div class="h1 title-division">Наші торгові <span>марки</span></div>
            <div class="trademarks-slider-nav">
            </div>
        </div>
        <div class="trademarks-slider trademarks-mesh" data-aos="fade-up">
            @for ($i = 1; $i <= 3; $i++)
                <div class="trademark-card">
                    <div class="trademark-card__image">
                        <img src="https://picsum.photos/200/55" alt="#">
                    </div>
                    <div class="trademark-card__info">
                        <div class="trademark-card__title">{{ fake()->sentence(3) }}</div>
                        <div class="trademark-card__text">{{ fake()->sentence(25) }}</div>
                        <a href="#" target="_blank" class="trademark-card__link">
                            <span>Офіційний сайт</span>
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                {{--  другой формат можна удалить --}}
                <div class="trademark-card">
                    <div class="trademark-card__image">
                        <img src="https://picsum.photos/106/106" alt="#">
                    </div>
                    <div class="trademark-card__info">
                        <div class="trademark-card__title">{{ fake()->sentence(3) }}</div>
                        <div class="trademark-card__text">{{ fake()->sentence(25) }}</div>
                        <a href="#" target="_blank" class="trademark-card__link">
                            <span>Офіційний сайт</span>
                            <svg class="icon">
                                <use xlink:href="/images/sprites/sprite.svg#right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="steps-division  anchor-wrap my-content overflow-x">
        <div class="anchor" id="steps"></div>
        <div class="steps-inner">
            <img class="steps-bg" src="/images/steps-bg.webp" alt="#">
            <div class="container">
                <div class="steps-mesh">
                    <div class="steps-column steps-column__left">
                        <div class="h1 title-division">Схема <span>роботи</span></div>
                        @for ($i = 1; $i <= 2; $i++)
                            <div class="step-card" data-aos="fade-right">
                                <div class="step-card__info">
                                    <div class="step-card__title">План на 2025</div>
                                    <div class="step-card__text">{{ fake()->sentence(40) }}</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="steps-column steps-column__right">
                        @for ($i = 1; $i <= 2; $i++)
                            <div class="step-card" data-aos="fade-left">
                                <div class="step-card__info">
                                    <div class="step-card__title">План на 2025</div>
                                    <div class="step-card__text">{{ fake()->sentence(40) }}</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="partners-division  anchor-wrap container my-content overflow-x">
        <div class="anchor" id="partners"></div>
        <div class="h1 title-division" data-aos="fade-up">Партнери</div>
        <div class="partners-mesh">
            @for ($i = 1; $i <= 3; $i++)
                <div class="partner-card" data-aos="zoom-in">
                    <img class="partner-card__image" src="https://picsum.photos/130/50" alt="#">
                </div>
                {{--  другой формат можна удалить --}}
                <div class="partner-card" data-aos="zoom-in">
                    <img class="partner-card__image" src="https://picsum.photos/100/100" alt="#">
                </div>
            @endfor
        </div>
    </div>

    <div class="clients-division  anchor-wrap my-content overflow-x">
        <div class="anchor" id="clients"></div>
        <img class="clients-deco" src="/images/clients-deco.webp" alt="#">
        <div class="container">
            <div class="clients-info__title h1 show-mobile-sm text-center">Географія <span>клієнтів</span></div>
            <div class="clients-inner">
                <div class="clients-image" data-aos="fade-right">
                    <img src="/images/world.webp" alt="#">
                </div>
                <div class="clients-info" data-aos="fade-left">
                    <div class="clients-info__title h1 show-desktop-sm">Географія <span>клієнтів</span></div>
                    <div class="clients-info__text">{{ fake()->sentence(20) }}</div>
                    <div class="clients-info__text-alt">{{ fake()->sentence(65) }}</div>
                    <div class="clients-info__countries">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="clients-info__country">{{ fake()->sentence(1) }}</div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contacts-division anchor-wrap overflow-x">
        <div class="anchor" id="contacts"></div>
        <img class="contacts-bg" src="/images/contatcs.webp" alt="#">
        <div class="container">
            <div class="contacts-inner">
                <div class="form callback-form" data-aos="fade-right">
                    <div class="validation custom-form">
                        <form>
                            @csrf
                            <div class="form-success form-inner">
                                <div class="form-title">Маєте <span>питання?</span></div>
                                <div class="form-subtitle">Напишіть нам і ми зв'яжемося з вами найближчим часом</div>
                                <div class="inputs-wrap">
                                    <div class="validation-field">
                                        <div class="error"></div>
                                        <input type="text" name="name">
                                        <div class="placeholder">І'мя*</div>
                                    </div>
                                    <div class="validation-field cell2">
                                        <div class="error"></div>
                                        <input type="text" name="email">
                                        <div class="placeholder">E-mail*</div>
                                    </div>
                                    <div class="validation-field cell2">
                                        <div class="error"></div>
                                        <input type="text" name="phone">
                                        <div class="placeholder">Телефон*</div>
                                    </div>
                                    <div class="validation-field">
                                        <div class="error"></div>
                                        <input type="text" name="comment">
                                        <div class="placeholder">Коментар*</div>
                                    </div>
                                    <label class="button">
                                        <input type="submit">
                                        залишити заявку
                                    </label>
                                </div>
                                <div class="form-success-message"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contacts-info" data-aos="fade-left">
                    <h1 class="contacts-info__title title-division">Контакти</h1>
                    <a class="contacts-info__link" href="https://www.google.com/maps/search/вул. Велика Арнаутська, 15"
                       target="_blank">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#address"></use>
                        </svg>
                        <span>вул. Велика Арнаутська, 15</span>
                    </a>
                    <a class="contacts-info__link" href="tel:+38 067 799 68 88">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#phone"></use>
                        </svg>
                        <span>+38 067 799 68 88</span>
                    </a>
                    <a class="contacts-info__link" href="mailto:info@admiral.ua">
                        <svg class="icon">
                            <use xlink:href="/images/sprites/sprite.svg#email"></use>
                        </svg>
                        <span>info@admiral.ua</span>
                    </a>
                    <div class="contacts-info__row">
                        <div class="contacts-info__cell">
                            <div class="contacts-info__social-label social-label">Соціальні мережі:</div>
                            <div class="contacts-info__social-list social-list">
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#facebook"></use>
                                    </svg>
                                </a>
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#linkedin"></use>
                                    </svg>
                                </a>
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#instagram"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="contacts-info__cell">
                            <div class="contacts-info__social-label social-label">Месенджери:</div>
                            <div class="contacts-info__social-list social-list">
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#viber"></use>
                                    </svg>
                                </a>
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#telegram"></use>
                                    </svg>
                                </a>
                                <a class="contacts-info__social-item social-item" href="#" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="/images/sprites/sprite.svg#whatsapp"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


