<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('library.welcome') }}</title>

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script src="/js/app.js" defer></script>
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
    {{-- @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('path-to-rtl.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('path-to-ltr.css') }}">
    @endif --}}
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    {{ __('library.homepage') }}
                                </a>
                                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register</a>
                                @endif
                            @endauth

                            <a href="{{ route('switchLang', 'ar') }}" style="border-left: 5px solid rgb(104, 0, 0)"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                العربية
                            </a>
                            <a href="{{ route('switchLang', 'en') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                English
                            </a>



                            {{-- <h1>@lang('messages.hello', ['name' => 'John'])</h1>
                                            <a href="{{ url('/set-locale/en') }}">English</a>
                                            <a href="{{ url('/set-locale/ar') }}">العربية</a> --}}

                            {{-- <ul class="navbar-nav ms-auto">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li class="nav-item">
                                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul> --}}
                            {{-- <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                                    @php
                                                        $locale = app()->getLocale();
                                                        $switchToLocale = $locale == 'en' ? 'ar' : 'en';
                                                    @endphp
                                                    <a class="nav-link" href="{{ route('switchLang', $switchToLocale) }}">
                                                        {{ $switchToLocale == 'en' ? 'English' : 'العربية' }}
                                                    </a>
                                                </li>
                                            </ul> --}}
                        </nav>
                    @endif
                </header>
                @if (Route::has('login'))
                    <div class="container max-w-7xl pt-5 pb-12 mb-12">
                        <div class="gradient-line">
                        </div>
                        <div class="row">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 124.8372 55.2489" class="logo">

                                    <defs>
                                        <linearGradient id="seven-gradient" gradientUnits="userSpaceOnUse"
                                            x1="23.5345" y1="27.9014" x2="121.9345" y2="27.9014"
                                            gradientTransform="matrix(1 0 0 -1 0 55.8028)">
                                            <stop offset="0" style="stop-color: #f0ebab" />
                                            <stop offset="0.4" style="stop-color: #f3b4ce" />
                                            <stop offset="1" style="stop-color: #96cfca" />
                                        </linearGradient>
                                        <clipPath id="clip-seven">
                                            <path
                                                d="M102.2345,2.9014v9.8h9.6v23.6l-65.3-33.3l-0.3-0.1h-22.7l32.4,16.3l66,33.7v-50H102.2345z" />
                                        </clipPath>
                                        <clipPath id="clip-u">
                                            <path
                                                d="M52.3345,38.5014c0,2.2091-1.7909,4-4,4h-31.6c-2.2091,0-4-1.7909-4-4v-35.6h-9.8v35.6c0,7.7,6.2,13.9,13.8,13.9h31.6c7.6,0,13.8-6.2,13.8-13.9v-8.1l-9.8-5V38.5014z" />
                                        </clipPath>
                                    </defs>

                                    <g fill="rgba(255,255,255,0.08)">
                                        <path
                                            d="M102.2345,2.9014v9.8h9.6v23.6l-65.3-33.3l-0.3-0.1h-22.7l32.4,16.3l66,33.7v-50H102.2345z" />
                                        <path
                                            d="M52.3345,38.5014c0,2.2091-1.7909,4-4,4h-31.6c-2.2091,0-4-1.7909-4-4v-35.6h-9.8v35.6c0,7.7,6.2,13.9,13.8,13.9h31.6c7.6,0,13.8-6.2,13.8-13.9v-8.1l-9.8-5V38.5014z" />
                                    </g>

                                    <path clip-path="url(#clip-seven)" class="draw-path seven-path"
                                        stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10"
                                        d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff"
                                        stroke-width="11" stroke-miterlimit="10"
                                        d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046"
                                        pathLength="100" />
                                    <path clip-path="url(#clip-seven)" class="draw-path seven-path"
                                        stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10"
                                        d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff"
                                        stroke-width="11" stroke-miterlimit="10"
                                        d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046"
                                        pathLength="100" />
                                    <path clip-path="url(#clip-seven)" class="draw-path seven-path"
                                        stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10"
                                        d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff"
                                        stroke-width="11" stroke-miterlimit="10"
                                        d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046"
                                        pathLength="100" />
                                </svg>
                            </div>
                        </div>
                        @auth
                            <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none group mt-3"
                                data-spotlight>
                                <!-- Card 1 -->
                                <div
                                    class="relative h-full bg-gray-800 rounded-xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-gray-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                                    <div
                                        class="relative h-full bg-gray-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                                            aria-hidden="true">
                                            <div
                                                class="absolute inset-0 translate-z-0 bg-gray-800 rounded-full blur-[80px]">
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full">
                                            <div class="icon mb-3">
                                                <svg aria-labelledby="middleware-icon-title" fill="none"
                                                    height="28" role="img" viewBox="0 0 28 28" width="28"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title id="middleware-icon-title">
                                                        An icon for Edge
                                                    </title>
                                                    <defs>
                                                        <linearGradient gradientUnits="userSpaceOnUse"
                                                            id="icon-gradient-fill" x1="4" x2="40"
                                                            y1="4" y2="24">
                                                            <stop stop-color="white" stop-opacity="0.2"></stop>
                                                            <stop offset="0" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="0.5" stop-color="white"></stop>
                                                            <stop offset="0.75" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="1" stop-color="white" stop-opacity="0">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path
                                                        d="M18.5 11.0001L18.5 17.0001M26 8.00012V20.0001M11.75 14.0001L2 20.0001L2 8.00012L11.75 14.0001Z"
                                                        stroke="url(#icon-gradient-fill)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"></path>
                                                </svg>
                                            </div>
                                            <a href="{{ route('user') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">"Show
                                                all books"</a>
                                            <p class="text-gray-400 mt-3">
                                                All the books you need him here ;)
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div
                                    class="relative h-full bg-gray-800 rounded-xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-gray-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                                    <div
                                        class="relative h-full bg-gray-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                                            aria-hidden="true">
                                            <div
                                                class="absolute inset-0 translate-z-0 bg-gray-800 rounded-full blur-[80px]">
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full">
                                            <div class="icon mb-3">
                                                <svg aria-labelledby="routes-icon-title" fill="none" height="30"
                                                    role="img" viewBox="0 0 30 30" width="30"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title id="routes-icon-title">
                                                        An icon of a globe
                                                    </title>
                                                    <defs>
                                                        <linearGradient gradientUnits="userSpaceOnUse"
                                                            id="icon-gradient-fill" x1="4" x2="40"
                                                            y1="4" y2="24">
                                                            <stop stop-color="white" stop-opacity="0.2"></stop>
                                                            <stop offset="0" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="0.5" stop-color="white"></stop>
                                                            <stop offset="0.75" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="1" stop-color="white" stop-opacity="0">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path
                                                        d="M15 26.25C17.4937 26.2499 19.9168 25.4215 21.8888 23.895C23.8607 22.3685 25.2699 20.2304 25.895 17.8163M15 26.25C12.5063 26.2499 10.0832 25.4215 8.11121 23.895C6.13925 22.3685 4.73009 20.2304 4.105 17.8163M15 26.25C18.1062 26.25 20.625 21.2125 20.625 15C20.625 8.7875 18.1062 3.75 15 3.75M15 26.25C11.8937 26.25 9.375 21.2125 9.375 15C9.375 8.7875 11.8937 3.75 15 3.75M15 3.75C16.9953 3.74917 18.9549 4.2792 20.6777 5.28571C22.4006 6.29221 23.8246 7.73896 24.8037 9.4775M15 3.75C13.0047 3.74917 11.0451 4.2792 9.32226 5.28571C7.59942 6.29221 6.17538 7.73896 5.19625 9.4775M24.8037 9.4775C22.0821 11.8349 18.6007 13.1302 15 13.125C11.2525 13.125 7.825 11.75 5.19625 9.4775M24.8037 9.4775C25.7548 11.1625 26.2531 13.0651 26.25 15C26.25 15.9725 26.1262 16.9163 25.895 17.8163M25.895 17.8163C22.5615 19.6642 18.8115 20.631 15 20.625C11.0475 20.625 7.33375 19.6063 4.105 17.8163M4.105 17.8163C3.86843 16.8962 3.74915 15.95 3.75 15C3.75 12.9938 4.275 11.1088 5.19625 9.4775"
                                                        stroke="url(#icon-gradient-fill)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"></path>
                                                </svg>
                                            </div>
                                            <a href="https://graphicsmarketnet.medium.com/the-top-100-bestselling-books-of-all-time-7dd3be82a280"
                                                target="_blank"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                "Top"</a>
                                            <p class="text-gray-400 mt-3">
                                                Top Rate Books ;)
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div
                                    class="relative h-full bg-gray-800 rounded-xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-gray-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                                    <div
                                        class="relative h-full bg-gray-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                                            aria-hidden="true">
                                            <div
                                                class="absolute inset-0 translate-z-0 bg-gray-800 rounded-full blur-[80px]">
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full">
                                            <div class="icon mb-3">
                                                <svg aria-labelledby="observability-icon-title" fill="none"
                                                    height="28" role="img" viewBox="0 0 28 28" width="28"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient gradientUnits="userSpaceOnUse"
                                                            id="icon-gradient-fill" x1="4" x2="40"
                                                            y1="4" y2="24">
                                                            <stop stop-color="white" stop-opacity="0.2"></stop>
                                                            <stop offset="0" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="0.5" stop-color="white"></stop>
                                                            <stop offset="0.75" stop-color="white" stop-opacity="0.4">
                                                            </stop>
                                                            <stop offset="1" stop-color="white" stop-opacity="0">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path
                                                        d="M8 17V20M12 14V20M16 11V20M20 8V20M6 25H22C22.7957 25 23.5587 24.6839 24.1213 24.1213C24.6839 23.5587 25 22.7957 25 22V6C25 5.20435 24.6839 4.44129 24.1213 3.87868C23.5587 3.31607 22.7957 3 22 3H6C5.20435 3 4.44129 3.31607 3.87868 3.87868C3.31607 4.44129 3 5.20435 3 6V22C3 22.7957 3.31607 23.5587 3.87868 24.1213C4.44129 24.6839 5.20435 25 6 25Z"
                                                        stroke="url(#icon-gradient-fill)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"></path>
                                                </svg>
                                            </div>
                                            <a href="https://github.com/abdullkader"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                "Contact"</a>
                                            <p class="text-gray-400 mt-3">
                                                Contact us on GitHub ;)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gradient-background__wrapper">
                                <div class="gradient-background">
                                    <div class="gradient-background__shape gradient-background__shape--1"></div>
                                    <div class="gradient-background__shape gradient-background__shape--2"></div>
                                </div>
                                <div class="gradient-background__noise"></div>
                            </div>
                        </div>
                    @endauth
                @endif
                <section data-gtm-key="tesla-fixed-background-11" class="" id="tesla_fixed_background_11">
                    <div class="dx-fixed-background" id="react-data-tesla_fixed_background_11"
                        data-component-status="initialized">
                        <section>
                            <div class="dx-fixed-background__separator-container">
                                <div class="tds-theme--replicant-separator  tds-theme--replicant-separator--reversed">
                                </div>
                            </div>
                            <div class="dx-fixed-background__container">
                                {{-- <div class="dx-fixed-background__media-wrapper">
                        <picture class="tcl-react-image dx-fixed-background__media"><img src="https://res.cloudinary.com/du6mfjbbd/image/upload/v1701989004/1691530134-about-hero_xdbubk.jpg" class="dx-fixed-background__media-asset"></picture>
                    </div> --}}
                                {{-- <article class="z-10 max-w-[60rem] backdrop-blur-sm bg-white/30 p-8 rounded-xl"><h3 class="text-4xl">An interesting way to do a slight "parallax" effect</h3>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </article> --}}
                            </div>
                            <div class="dx-fixed-background__separator-container">
                                <div class="tds-theme--replicant-separator"></div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
