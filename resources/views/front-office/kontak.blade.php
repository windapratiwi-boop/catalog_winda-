@extends('layouts.app')


@section('konten')
    <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.25em] text-primary">
                HALONA BALI
            </span>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Hubungi Kami
            </h1>

            <p class="mt-5 text-base leading-7 text-gray-600 sm:text-lg">
                Kami siap membantu menjawab pertanyaan mengenai produk,
                pemesanan, maupun informasi lainnya tentang HALONA BALI.
            </p>
        </div>

        {{-- Contact --}}
        <div class="mt-14 grid gap-8 lg:grid-cols-5 lg:gap-10">

            {{-- Information --}}
            <div class="lg:col-span-2">
                <div class="h-full rounded-2xl bg-gray-900 p-8 text-white">

                    <h2 class="text-2xl font-semibold">
                        Mari Terhubung
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-gray-300">
                        Silakan hubungi kami melalui informasi yang tersedia.
                        Tim HALONA BALI siap membantu Anda.
                    </p>

                    <div class="mt-10 space-y-7">

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <h3 class="font-semibold">Alamat</h3>
                                <p class="mt-1 text-sm text-gray-300">
                                    Abian Semal, Bali
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div>
                                <h3 class="font-semibold">Telepon</h3>
                                <p class="mt-1 text-sm text-gray-300">
                                    +62 XXX-XXXX-XXXX
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <h3 class="font-semibold">Email</h3>
                                <p class="mt-1 text-sm text-gray-300">
                                    hello@halonabali.com
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <i class="fa-solid fa-clock"></i>
                            </div>

                            <div>
                                <h3 class="font-semibold">Jam Operasional</h3>
                                <p class="mt-1 text-sm leading-6 text-gray-300">
                                    Senin - Jumat<br>
                                    08:00 - 17:00 WITA
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-3">
                <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 sm:p-10">

                    <h2 class="text-2xl font-semibold text-gray-900">
                        Kirim Pesan
                    </h2>

                    <p class="mt-2 text-sm text-gray-500">
                        Sampaikan pertanyaan atau pesan Anda kepada kami.
                    </p>

                    <form class="mt-8 space-y-6">

                        <div>
                            <label for="nama" class="mb-2 block text-sm font-medium text-gray-700">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan nama Anda"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="nama@email.com"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>

                        <div>
                            <label for="subjek" class="mb-2 block text-sm font-medium text-gray-700">
                                Subjek
                            </label>

                            <input
                                type="text"
                                id="subjek"
                                name="subjek"
                                placeholder="Masukkan subjek pesan"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>

                        <div>
                            <label for="pesan" class="mb-2 block text-sm font-medium text-gray-700">
                                Pesan
                            </label>

                            <textarea
                                id="pesan"
                                name="pesan"
                                rows="5"
                                placeholder="Tuliskan pesan Anda..."
                                class="w-full resize-none rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20"></textarea>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 rounded-lg bg-primary px-6 py-3 text-sm font-semibold text-white transition hover:opacity-90">

                            <i class="fa-solid fa-paper-plane"></i>
                            Kirim Pesan

                        </button>

                    </form>
                </div>
            </div>

        </div>

        {{-- Store --}}
        <div class="mt-12 rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 sm:p-10">

            <div class="flex flex-col gap-8 md:flex-row md:items-center md:justify-between">

                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                        HALONA BALI
                    </span>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        Temukan Kami
                    </h2>

                    <p class="mt-3 max-w-xl text-sm leading-6 text-gray-600">
                        Kunjungi HALONA BALI untuk melihat koleksi fashion
                        dan mendapatkan pengalaman berbelanja yang nyaman.
                    </p>
                </div>

                <div class="flex items-center gap-4 rounded-xl bg-gray-50 p-5">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white text-primary shadow-sm">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-gray-900">
                            Lokasi
                        </p>

                        <p class="mt-1 text-sm text-gray-500">
                            Abian Semal, Bali, Indonesia
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
