<section class="dark-bg bot-element">
        <div class="container">
            <div class="inline-facts-container fl-wrap">
                <!-- inline-facts -->
                @if (count($steps)>0)
                @foreach ($steps as $item_steps)

                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <i class="{{ $item_steps->Icon}}"></i>
                            <h2>{{ $item_steps->Title}}</h2>
                        </div>
                        <h6>{{ $item_steps->Explanation}}</h6>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- inline-facts end -->

            </div>
        </div>
    </section>