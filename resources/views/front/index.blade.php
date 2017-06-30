@extends('layouts.principal')

@section('comment')
	@for ($i = 0; $i < 10; $i++)
	<div class="comment row">
            <div class="photoComment col-lg-1">
               <img width="60px" height="60px" src="http://www.tc.columbia.edu/arts-and-humanities/arts-administration/alumni/alumni-profiles/alumni-profiles/profilePicture.jpg" alt="profile photo"> 
            </div>
            <div class="commentText col-lg-11">
            <span style="color: #22f; font-weight: bold;">Nome do individuo:</span> 

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, cumque sit distinctio nobis optio recusandae tempora corporis voluptas autem porro, reiciendis odit impedit veritatis ipsam! Perferendis doloremque id, quasi voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quod repellendus amet aperiam beatae. Impedit, amet praesentium accusantium reprehenderit velit excepturi commodi enim atque labore ipsam aliquid, sit rem ducimus?

            
            <span>Postado em: 29/06/2017</span>
            </div>
        </div>
        <br>
    @endfor 
@endsection

