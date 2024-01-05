<section class="bg-gray-50 mx-auto max-w-[1340px] ">
    <div class="px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
      <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
        <h2 class="max-w-xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
          Read our latest news about Mappia
        </h2>

        <div class="mt-8 flex gap-4 lg:mt-0">
          <button
            aria-label="Previous slide"
            id="news_prev"
            class="rounded-full border border-indigo-700 p-3 text-indigo-600 transition hover:bg-indigo-700 hover:text-white"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-5 w-5 rtl:rotate-180"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </button>

          <button
            aria-label="Next slide"
            id="next_news"
            class="rounded-full border border-indigo-700 p-3 text-indigo-600 transition hover:bg-indigo-700 hover:text-white"
          >
            <svg
              class="h-5 w-5 rtl:rotate-180"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5l7 7-7 7"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              />
            </svg>
          </button>
        </div>
      </div>

      <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
        <div id="news_slider" class="keen-slider">
            @php
                $var = ['sasas','sas','sasa','sasq','sasq']
            @endphp
            @forelse ($var as $s )
            <div class="keen-slider__slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12"
              >
                <div>
                  <div class="mt-4">
                    <p class="text-2xl font-bold text-rose-600 sm:text-3xl">New partner!!!</p>

                    <p class="mt-4 leading-relaxed text-gray-700">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad possimus assumenda eveniet illum, dignissimos fugiat, veritatis eum eligendi similique dolore doloremque odio corporis quo cumque impedit, tenetur quos quam asperiores!
                    </p>
                  </div>
                </div>

                <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                  &mdash; January 3, 2024
                </footer>
              </blockquote>
            </div>
            @empty
                <div>No news</div>
            @endforelse
        </div>
      </div>
    </div>
  </section>
