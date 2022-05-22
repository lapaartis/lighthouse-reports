<div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-4">
    @foreach($audits as $audit)
        <a href="#" class="border border-2 rounded">
            <div class="py-5">
                <div class="text-center">
                    <span class="border-4 border-white rounded-full mx-auto inline-block">
                        <img class="rounded-full w-20 h-20"
                             src="https://randomwordgenerator.com/img/picture-generator/51e6dc41434faa0df7c5d57bc32f3e7b1d3ac3e455517349762f72d794_640.jpg"
                             alt="profile"/>
                    </span>
                </div>
                <p class="text-center"><span class="font-bold">{{ $audit }}</span></p>
                <p class="text-xs text-center">Undertext</p>
            </div>
            <hr/>
            <div class="flex justify-between px-10 py-5">
                <div class="text-center">
                    <p class="font-bold">100K</p>
                    <p class="text-xs">Followers</p>
                </div>
                <div class="text-center">
                    <p class="font-bold">903K</p>
                    <p class="text-xs">Likes</p>

                </div>
                <div class="text-center">
                    <p class="font-bold">104K</p>
                    <p class="text-xs">Photos</p>

                </div>
            </div>
        </a>
    @endforeach
</div>
