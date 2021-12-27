from django.shortcuts import render
from rest_framework.generics import ListAPIView
from rest_framework.generics import CreateAPIView
from rest_framework.generics import DestroyAPIView
from rest_framework.generics import UpdateAPIView
from udemyclone.serializers import CoursedetailsSerializer
from udemyclone.models import Coursedetails

# Create your views here.
class ListCourseAPIView(ListAPIView):
    """This endpoint list all of the available Courses from the database"""
    queryset = Coursedetails.objects.all()
    serializer_class = CoursedetailsSerializer

class CreateCourseAPIView(CreateAPIView):
    """This endpoint allows for creation of a Course"""
    queryset = Coursedetails.objects.all()
    serializer_class = CoursedetailsSerializer

class UpdateCourseAPIView(UpdateAPIView):
    """This endpoint allows for updating a specific Course by passing in the id of the Course to update"""
    queryset = Coursedetails.objects.all()
    serializer_class = CoursedetailsSerializer

class DeleteCourseAPIView(DestroyAPIView):
    """This endpoint allows for deletion of a specific Course from the database"""
    queryset = Coursedetails.objects.all()
    serializer_class = CoursedetailsSerializer