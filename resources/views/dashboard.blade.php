<x-app-layout>
    <x-slot name="header">
    @php
     $breadcrumb = array (
  array(__('Dashboard'),NULL)
        );
    $user = Auth::user()
      @endphp

     <x-breadcrumb :items=$breadcrumb/>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                  <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                      <h1 class="text-2xl font-semibold leading-6 text-gray-900 dark:text-white">{{__('Dashboard')}}</h1>
                    </div>
                   
                  </div>
                </div>
                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 gap-6 lg:gap-8 p-6 lg:p-8">
                    <x-info-message/>
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6 sm:col-span-2">
                            <div class="pt-2">
                                <div class="card bg-base-100 shadow-xl">
                                    <div class="card-body">
                                        <h2 class="card-title">{{__('Your profile')}}
                                        <a href="{{route('profile.show')}}" class="text-primary hover:text-indigo-400">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                                        </svg>
                </a>
                <a href="{{route('user.update-cursus-form')}}" class="text-primary hover:text-indigo-400">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/>
                </svg>
                </a>

                                        </h2>
                                        <div class="flex items-center justify-center">
                                            <div class="avatar">
                                                <div class="w-24 rounded-full ring 
                                                @if($user->hasRole('admin'))
                                                ring-error 
                                                @elseif($user->hasRole('moderator'))
                                                ring-warning
                                                @else
                                                ring-info
                                                @endif

                                                ring-offset-base-100 ring-offset-2">
                                                    <img src="{{$user->profile_photo_url}}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <h5 class="flex"><p class="mr-1">{{$user->name}}</p>
                                            @if($user->hasRole('admin'))
                                                    <p class="text-error">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                                            <path d="m438-452-58-57q-11-11-27.5-11T324-508q-11 11-11 28t11 28l86 86q12 12 28 12t28-12l170-170q12-12 11.5-28T636-592q-12-12-28.5-12.5T579-593L438-452ZM326-90l-58-98-110-24q-15-3-24-15.5t-7-27.5l11-113-75-86q-10-11-10-26t10-26l75-86-11-113q-2-15 7-27.5t24-15.5l110-24 58-98q8-13 22-17.5t28 1.5l104 44 104-44q14-6 28-1.5t22 17.5l58 98 110 24q15 3 24 15.5t7 27.5l-11 113 75 86q10 11 10 26t-10 26l-75 86 11 113q2 15-7 27.5T802-212l-110 24-58 98q-8 13-22 17.5T584-74l-104-44-104 44q-14 6-28 1.5T326-90Z"/>
                                                        </svg>
                                                    </p>
                                                    @elseif($user->hasRole('moderator'))
                                                    <p class="text-warning">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                                            <path d="m438-452-58-57q-11-11-27.5-11T324-508q-11 11-11 28t11 28l86 86q12 12 28 12t28-12l170-170q12-12 11.5-28T636-592q-12-12-28.5-12.5T579-593L438-452ZM326-90l-58-98-110-24q-15-3-24-15.5t-7-27.5l11-113-75-86q-10-11-10-26t10-26l75-86-11-113q-2-15 7-27.5t24-15.5l110-24 58-98q8-13 22-17.5t28 1.5l104 44 104-44q14-6 28-1.5t22 17.5l58 98 110 24q15 3 24 15.5t7 27.5l-11 113 75 86q10 11 10 26t-10 26l-75 86 11 113q2 15-7 27.5T802-212l-110 24-58 98q-8 13-22 17.5T584-74l-104-44-104 44q-14 6-28 1.5T326-90Z"/>
                                                        </svg>
                                                    </p>
                                                    @elseif($user->hasRole('contributor'))
                                                    <p class="text-primary">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                                            <path d="m438-452-58-57q-11-11-27.5-11T324-508q-11 11-11 28t11 28l86 86q12 12 28 12t28-12l170-170q12-12 11.5-28T636-592q-12-12-28.5-12.5T579-593L438-452ZM326-90l-58-98-110-24q-15-3-24-15.5t-7-27.5l11-113-75-86q-10-11-10-26t10-26l75-86-11-113q-2-15 7-27.5t24-15.5l110-24 58-98q8-13 22-17.5t28 1.5l104 44 104-44q14-6 28-1.5t22 17.5l58 98 110 24q15 3 24 15.5t7 27.5l-11 113 75 86q10 11 10 26t-10 26l-75 86 11 113q2 15-7 27.5T802-212l-110 24-58 98q-8 13-22 17.5T584-74l-104-44-104 44q-14 6-28 1.5T326-90Z"/>
                                                        </svg>
                                                    </p>
                                                    
                                                @endif
                                                
                                                </h5>
                                        </div>
                                        <div class="text-center justify-center">
                                            <p>{{$user->bio}}</p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="">
                                        @foreach($user->groups as $group)
                                        @if($group->public)
                                        <span class="badge mr-2 badge-primary"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="24"><path d="M40-240q-17 0-28.5-11.5T0-280v-23q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H40Zm240 0q-17 0-28.5-11.5T240-280v-25q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v25q0 17-11.5 28.5T680-240H280Zm500 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v23q0 17-11.5 28.5T920-240H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z"/></svg> {{$group->name}}</span>
                                        @else
                                        <span class="badge mr-2 badge-primary"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="24"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/></svg> {{$group->name}}</span>
                                        @endif
                                        @endforeach
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
<livewire:notifications-dashboard :$user lazy/>

                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <div class="pt-2">
                                <div class="stats shadow w-full">
                                    <div class="stat">
                                      <div class="stat-figure text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                      </div>
                                      <div class="stat-title">{{__('Total Thanks')}}</div>
                                      <div class="stat-value text-primary"><livewire:thanks-count :user=Auth::user() lazy /></div>
                                      
                                    </div>
                                    
                                    <div class="stat">
                                      <div class="stat-figure text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                      </div>
                                      <div class="stat-title">{{__('Published posts')}}</div>
                                      <div class="stat-value text-secondary"><livewire:posts-user-count :user=Auth::user() lazy /></div>
                                      
                                    </div>
                                    
                                    <div class="stat">
                                        <div class="stat-figure text-success">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="m615-395 31-112q4-12-.5-24T630-551l-95-65q-8-6-17.5-2.5T505-605l-31 112q-4 12 .5 24t15.5 20l95 65q8 6 17.5 2.5T615-395ZM160-207l-33-16q-31-13-42-44.5t3-62.5l72-156v279Zm160 87q-33 0-56.5-24T240-201v-239l107 294q3 7 5 13.5t7 12.5h-39Zm206-5q-31 11-62-3t-42-45L245-662q-11-31 3-61.5t45-41.5l301-110q31-11 61.5 3t41.5 45l178 489q11 31-3 61.5T827-235L526-125Z"/></svg>
                                        </div>
                                        <div class="stat-title">{{__('Published cards')}}</div>
                                        <div class="stat-value text-success"><livewire:cards-user-count :user=Auth::user() lazy /></div>
                                        
                                      </div>
                                    
                                  </div>
                        </div>
                            <div class="pt-2">
                                <div class="card bg-base-100 shadow-xl">
                                <div class="card-body">
                                    <h2 class="card-title">{{__('Your posts')}}</h2>
                                    <a wire:navigate href="{{route('posts.index')}}" class="btn btn-primary">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-160q-17 0-28.5-11.5T80-200q0-17 11.5-28.5T120-240h720q17 0 28.5 11.5T880-200q0 17-11.5 28.5T840-160H120Zm80-160q-17 0-28.5-11.5T160-360v-240q0-17 11.5-28.5T200-640q17 0 28.5 11.5T240-600v240q0 17-11.5 28.5T200-320Zm160 0q-17 0-28.5-11.5T320-360v-400q0-17 11.5-28.5T360-800q17 0 28.5 11.5T400-760v400q0 17-11.5 28.5T360-320Zm160 0q-17 0-28.5-11.5T480-360v-400q0-17 11.5-28.5T520-800q17 0 28.5 11.5T560-760v400q0 17-11.5 28.5T520-320Zm275-20q-14 8-30.5 3.5T740-355L620-565q-8-14-3.5-30.5T635-620q14-8 30.5-3.5T690-605l120 210q8 14 3.5 30.5T795-340Z"/></svg>
                                        {{__('Manage')}}
                                    </a>
                                    <a wire:navigate href="{{route('posts.create')}}" class="btn btn-secondary">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-440v120q0 17 11.5 28.5T480-280q17 0 28.5-11.5T520-320v-120h120q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H520v-120q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640v120H320q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440h120ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Z"/></svg>
                                        {{__('Create')}}
                                    </a>
                                    <a wire:navigate href="{{route('comments.show')}}" class="btn btn-accent">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M280-240q-17 0-28.5-11.5T240-280v-80h520v-360h80q17 0 28.5 11.5T880-680v503q0 27-24.5 37.5T812-148l-92-92H280Zm-40-200-92 92q-19 19-43.5 8.5T80-377v-463q0-17 11.5-28.5T120-880h520q17 0 28.5 11.5T680-840v360q0 17-11.5 28.5T640-440H240Z"/></svg>
                                        {{__('View comments')}}
                                    </a>
                                </div>
                                </div>
                            </div>
                        @role('moderator')
                        <div class="pt-2">
                            <div class="card bg-base-100 shadow-xl">
                                <div class="card-body">
                                    <h2 class="card-title">{{__('Special functions')}}</h2>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="sm:col-span-1 col-span-2">
                                    @if(App\Models\Comment::where('validated', '=', 0)->count() > 0)
                                    <div class="indicator w-full">
                                        <span class="indicator-item badge badge-error">!</span> 
                                        <a wire:navigate href="{{route('comments.moderate')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m694-273 142-142q12-12 28-11.5t28 12.5q11 12 11.5 28T892-358L722-188q-12 12-28 12t-28-12l-85-86q-11-11-11.5-27.5T581-330q11-11 28-11t28 11l57 57Zm-454 33-92 92q-19 19-43.5 8.5T80-177v-623q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v240q0 17-11.5 28.5T840-520H560q-33 0-56.5 23.5T480-440v160q0 17-11.5 28.5T440-240H240Z"/></svg>
                                        {{__('Validate comments')}}
                                    </a>
                                    </div>
                                    @else

                                    <a wire:navigate href="{{route('comments.moderate')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m694-273 142-142q12-12 28-11.5t28 12.5q11 12 11.5 28T892-358L722-188q-12 12-28 12t-28-12l-85-86q-11-11-11.5-27.5T581-330q11-11 28-11t28 11l57 57Zm-454 33-92 92q-19 19-43.5 8.5T80-177v-623q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v240q0 17-11.5 28.5T840-520H560q-33 0-56.5 23.5T480-440v160q0 17-11.5 28.5T440-240H240Z"/></svg>
                                        {{__('Validate comments')}}
                                    </a>
                                    @endif
                                </div>
                                <div class="sm:col-span-1 col-span-2">
                                @if(App\Models\Post::where('published', 0)->count() > 0)
                                <div class="indicator w-full">
                                        <span class="indicator-item badge badge-error">!</span> 
                                        <a wire:navigate href="{{route('posts.moderate')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Zm56 328q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
                                        {{__('Validate posts')}}
                                    </a>
                                    </div>
                                    @else
                                    <a wire:navigate href="{{route('posts.moderate')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Zm56 328q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
                                        {{__('Validate posts')}}
                                    </a>
                                    @endif
                                </div>
                                @role('admin')
                                <div class="col-span-2 divider"></div> 
                                <div class="sm:col-span-1 col-span-2">
                                    <a wire:navigate href="{{route('users.index')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M80-240v-32q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-29 72-24 143t48 135H160q-33 0-56.5-23.5T80-240Zm600 0q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm234 328-6-28q-12-5-22.5-10.5T584-204l-29 9q-13 4-25.5-1T510-212l-8-14q-7-12-5-26t13-23l22-19q-2-14-2-26t2-26l-22-19q-11-9-13-22.5t5-25.5l9-15q7-11 19-16t25-1l29 9q11-8 21.5-13.5T628-460l6-29q3-14 13.5-22.5T672-520h16q14 0 24.5 9t13.5 23l6 28q12 5 22.5 11t21.5 15l27-9q14-5 27 0t20 17l8 14q7 12 5 26t-13 23l-22 19q2 12 2 25t-2 25l22 19q11 9 13 22.5t-5 25.5l-9 15q-7 11-19 16t-25 1l-29-9q-11 8-21.5 13.5T732-180l-6 29q-3 14-13.5 22.5T688-120h-16q-14 0-24.5-9T634-152Z"/></svg>
                                        {{__('Manage users')}}
                                    </a>
                                </div>
                                <div class="sm:col-span-1 col-span-2">
                                    <a wire:navigate href="{{route('posts.all')}}" class=" btn btn-neutral w-full">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-160q-17 0-28.5-11.5T80-200q0-17 11.5-28.5T120-240h720q17 0 28.5 11.5T880-200q0 17-11.5 28.5T840-160H120Zm80-160q-17 0-28.5-11.5T160-360v-240q0-17 11.5-28.5T200-640q17 0 28.5 11.5T240-600v240q0 17-11.5 28.5T200-320Zm160 0q-17 0-28.5-11.5T320-360v-400q0-17 11.5-28.5T360-800q17 0 28.5 11.5T400-760v400q0 17-11.5 28.5T360-320Zm160 0q-17 0-28.5-11.5T480-360v-400q0-17 11.5-28.5T520-800q17 0 28.5 11.5T560-760v400q0 17-11.5 28.5T520-320Zm275-20q-14 8-30.5 3.5T740-355L620-565q-8-14-3.5-30.5T635-620q14-8 30.5-3.5T690-605l120 210q8 14 3.5 30.5T795-340Z"/></svg>
                                        {{__('Manage posts')}}
                                    </a>
                                </div>
                                <div class="sm:col-span-1 col-span-2">
                                    <a wire:navigate href="{{route('levels.index')}}" class=" btn btn-neutral w-full">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m297-581 149-243q6-10 15-14.5t19-4.5q10 0 19 4.5t15 14.5l149 243q6 10 6 21t-5 20q-5 9-14 14.5t-21 5.5H331q-12 0-21-5.5T296-540q-5-9-5-20t6-21ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-60v-240q0-17 11.5-28.5T160-420h240q17 0 28.5 11.5T440-380v240q0 17-11.5 28.5T400-100H160q-17 0-28.5-11.5T120-140Z"/></svg>                                        
                                        {{__('Manage courses, levels and types')}}
                                    </a>
                                </div>
                                <div class="sm:col-span-1 col-span-2">
                                    <a wire:navigate href="{{route('settings')}}" class=" btn btn-neutral w-full">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                        <path d="m620-284 56-56q6-6 6-14t-6-14L540-505q4-11 6-22t2-25q0-57-40.5-97.5T410-690q-11 0-21 1t-20 5q-9 4-11 14t5 17l74 74-56 56-74-74q-7-7-17-5t-14 11q-3 10-4.5 20t-1.5 21q0 57 40.5 97.5T408-412q13 0 24.5-2t22.5-6l137 136q6 6 14 6t14-6ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                </svg>
                                        {{__('Admin settings')}}
                                    </a>
                                </div>
                                <div class="sm:col-span-1 col-span-2">
                                    <a wire:navigate href="{{route('groups.index')}}" class=" btn btn-neutral w-full">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                        <path d="m620-284 56-56q6-6 6-14t-6-14L540-505q4-11 6-22t2-25q0-57-40.5-97.5T410-690q-11 0-21 1t-20 5q-9 4-11 14t5 17l74 74-56 56-74-74q-7-7-17-5t-14 11q-3 10-4.5 20t-1.5 21q0 57 40.5 97.5T408-412q13 0 24.5-2t22.5-6l137 136q6 6 14 6t14-6ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                </svg>
                                        {{__('Manage groups')}}
                                    </a>
                                </div>
                                
                                @endrole
                                </div>
                                </div>
                            </div>
                        </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
