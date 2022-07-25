<h2 class="text-3xl md:text-4xl lg:text-6xl font-bold mt-4">Frequently Asked Questions</h2>

@php
$i = 0;
    $qas = [
        [
            "q"=>"What is Travelix?",
            "a"=>"Travelix will be the first token launched based on the market of international traveling. In the time we live here today traveling has become essential. The society all around the globe got used to traveling."
        ],
        [
            "q"=>"What are the advantages of Travelix?",
            "a"=>"Travelix is here to make this easier, we stand for an easy international payment method for all your travel needs. From taxi’s to flights, from your weekly over to your once in a lifetime auto rickshaw.
With the help of our community we plan on integrating our payment method linked to an extraordinary crypto token.",
        ],
        [
            "q"=>"Is Travelix only virtual?",
            "a"=>"Travelix it’s payment system will be mainly virtual an exception for this are our bonuses and extras from our future NFT collection."
        ],
        [
            "q"=>"How do I get started?",
            "a"=>"Press: “enter presale” and register you’re account. You will sent to you’re dashboard where you can buy our token."
        ],
        [
            "q"=>"When does Travelix launch?",
            "a"=>"Travelix Will be launched at the end of Q4 placed on the roadmap. "
        ],
        [
            "q"=>"Will Travelix be listed on exchanges (such as Binance, coinbase etc)?",
            "a"=>"Travelix will be launched on platforms as uniswap and multiple charts. In coöperation with public exchanges we will try our best to get listed on these exchanges as soon as possible."
        ],
        [
            "q"=>"Which wallets will accept Travelix?",
            "a"=>"Travelix can be stored after launch on non custodial wallets like trust wallet and MetaMask. After launch our team will get to work and focus on releasing in public wallets like litebit, TRASTRA & more."
        ],
    ]
@endphp

<div class="my-4 border-gray-200 border-b rounded-b-md" id="accordion-collapse" data-accordion="collapse">
    @foreach ($qas as $qa)
    <h2 id="accordion-collapse-heading-{{$i}}" class=" border border-gray-200 border-b-0 first:rounded-t-md overflow-hidden">
      <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-{{$i}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$i}}">
        <span class="text-2xl">{{ $qa['q'] }}</span>
        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-{{$i}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$i}}">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $qa['a'] }}</p>
      </div>
    </div>
    @php
        $i++;
    @endphp
    @endforeach
  </div>

