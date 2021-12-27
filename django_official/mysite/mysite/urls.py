from django.contrib import admin
from django.urls import path, include
from rest_framework.documentation import include_docs_urls

urlpatterns = [
    path('admin/', admin.site.urls),
    path('api/v1/todo/',include("todo.urls")),
    path('api/v1/udemyclone/',include("udemyclone.urls")),
    path('docs/', include_docs_urls(title='Api Docs')),
]