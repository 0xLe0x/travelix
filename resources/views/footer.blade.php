</main-content>
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="px-5 py-12 bg-gray-50 sm:px-6 md:flex md:items-center lg:px-20 justify-center">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8 container">
        <div class="space-y-8 xl:col-span-1">
          <a href="/" class="md:text-6xl text-4xl font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8"> {{ getenv('APP_NAME') }} </a>
          <p class="w-1/2 mt-2 text-sm text-gray-500">Easy transactions anywhere you go!</p>
        </div>
        <div class="grid grid-cols-2 gap-8 mt-12 xl:mt-0 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="md:text-2xl text-xl font-semibold text-blue-600">Quick Links</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> About </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Keyfeatures </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Roadmap </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> FAQs </a>
                </li>
                <li>
                    <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Certik Audit </a>
                  </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="md:text-2xl text-xl font-semibold text-blue-600">Resources</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Buy Presale </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> LitePaper </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Twitter </a>
                </li>

                <li>
                  <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Telegram </a>
                </li>

                <li>
                    <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Instagram </a>
                  </li>
              </ul>
            </div>
          </div>
          <div class="hidden lg:justify-end md:grid md:grid-cols-1">
            <div class="w-full mt-12 md:mt-0">
              <div class="mt-8 lg:justify-end xl:mt-0">
                <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase">Subscribe to our newsletter</h3>
                <p class="mt-4 text-sm text-gray-500 lg:ml-auto">The latest news, articles, and resources, sent to your inbox weekly.</p>
                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                  <form action="" method="post" id="revue-form" name="revue-form" target="_blank" class="p-1 mt-4 transition duration-500 ease-in-out transform border2 bg-gray-50 rounded-xl sm:max-w-lg sm:flex">
                    <div class="flex-1 min-w-0 revue-form-group">
                      <label for="member_email" class="sr-only">Email address</label>
                      <input id="cta-email" type="email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform bg-transparent border border-transparent rounded-md focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enter your email  ">
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-3 revue-form-actions">
                      <button type="submit" value="Subscribe" name="member[subscribe]" id="member_submit" class="block w-full px-5 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:px-10">Notify me</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-5 py-12 bg-gray-50 sm:px-6 md:flex md:items-center md:justify-between lg:px-20">

      <div class="mt-8 md:mt-0 md:order-1">
        <span class="mt-2 text-sm font-light text-gray-500">
          Copyright © {{ now()->year }}
          <a href=" {{ getenv('APP_URL') }} " class="mx-2 text-wickedblue hover:text-gray-500" rel="noopener noreferrer">{{ "@".getenv('APP_NAME') }}.</a>
        </span>
      </div>
    </div>
  </footer>

<script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
