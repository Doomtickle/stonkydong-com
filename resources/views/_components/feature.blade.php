<section class="relative pb-16 rounded-lg well lg:px-8 xl:px-16">
  <div class="max-w-md px-4 pt-8 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-transparent uppercase font-display bg-clip-text bg-gradient-to-tr from-purple-500 to-purple-300">Jacked to the tits</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-100 sm:text-4xl">
    Everything you need to keep on losing money
    </p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @include('_components.feature-card', [
        'icon' => 'folder',
        'title' => 'Portfolio Management',
        'body' => 'Track multiple portfolios across different accounts from one dashboard.'
        ])

        @include('_components.feature-card', [
        'icon' => 'chart',
        'title' => 'Charts out the ass',
        'body' => 'So many pretty colors. I\'m too dumb to know what they do, but other programmers told me they work.'
        ])

        @include('_components.feature-card', [
        'icon' => 'notes',
        'title' => 'Take notes',
        'body' => 'Write stuff down to look at later instead of shitposting online.'
        ])

        @include('_components.feature-card', [
        'icon' => 'paper-pencil',
        'title' => 'Paper trade',
        'body' => 'You\'re such a little bitch, but whatever. I guess you could use the money you save to buy tampons.'
        ])

        @include('_components.feature-card', [
        'icon' => 'upload',
        'title' => 'Open in other apps',
        'body' => 'Quickly export and open your portfolios in other apps that work better -- like
        Finviz and Yahoo'
        ])

        @include('_components.feature-card', [
        'icon' => 'search',
        'title' => 'Look shit up',
        'body' => 'Using the power of the internet, get (kinda) real time stock data. It\'s delayed so don\'t try to day trade
        with this, you dongus.'
        ])
      </div>
    </div>
  </div>
</section>
