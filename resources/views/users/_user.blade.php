<div class="list-group-item">
  <img src="https://cdn.learnku.com/uploads/sites/KDiyAbV0hj1ytHpRTOlVpucbLebonxeX.png"
      alt="{{ $user->name }}" class="mr-3">
  <a href="{{ route('users.show', $user) }}">
      {{ $user->name }}</a>
</div>
